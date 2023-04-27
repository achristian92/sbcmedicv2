<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Imports\RecipesImport;
use App\SoftMedic\Service\Recipes\Recipe;
use App\SoftMedic\Service\Recipes\Requests\RecipeRequest;
use App\SoftMedic\Utils\FileExcelRequest;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::whereNotNull('cod_susi')->get();

        return view('service.recipes.index',[
            'recipes' => $recipes,
        ]);
    }

    public function create()
    {
        return view('service.recipes.create',[
            'model' =>  new Recipe(),
        ]);
    }

    public function store(RecipeRequest $request)
    {
        Recipe::create($request->validated() + [
            'idUsuario'      => Auth::id(),
            'fecha_creacion' => now()->format('Y-m-d H:i'),
            'activo'         => 1
        ]);

        return redirect()->route('service.recipes.index')->with('message','Registro guardado');
    }

    public function edit(Recipe $recipe)
    {
        return view('service.recipes.edit',[
            'model' =>  $recipe,
        ]);
    }

    public function update(RecipeRequest $request, Recipe $recipe)
    {
        $recipe->update($request->validated());

        return redirect()->route('service.recipes.index')->with('message','Registro guardado');
    }
    public function import(FileExcelRequest $request)
    {
        $fileHeaders = (new HeadingRowImport)->toArray($request->file('file_upload'))[0][0];
        $requiredHeaders = [
            "cod_susi",
            "description",
            "presentation",
            "cost_unit_opcional",
            "price_opcional",
        ];
        $diff = (collect($requiredHeaders)->diff(collect($fileHeaders)));
        if (count($diff->all()) > 0)
            return back()->with('error','Las cabeceras del excel no coinciden con lo requerido');

        Excel::import(new RecipesImport(), $request->file('file_upload'));

        return redirect()
            ->route('service.recipes.index')
            ->with('message',"Recetas cargadas.");

    }

    public function status(Recipe $recipe)
    {
        $recipe->update([
            'activo' => !$recipe->activo
        ]);

        return redirect()
            ->route('service.recipes.index')
            ->with('message',"Se actualizo el estado.");
    }
}
