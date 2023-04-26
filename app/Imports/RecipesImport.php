<?php

namespace App\Imports;

use App\SoftMedic\Service\Recipes\Recipe;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class RecipesImport implements ToCollection,WithValidation,WithHeadingRow
{
    private $user_id, $date;

    public function __construct()
    {
        $this->user_id = Auth::id();
        $this->date = now()->format('Y-m-d H:i');
    }

    public function collection(Collection $collection)
    {
        $collection->each(function ($row) {

            $recipe = Recipe::updateOrCreate(
                [
                    'cod_susi' => $row['cod_susi']
                ],
                [
                    'descripcion'    => $row['description'],
                    'presentacion'   => $row['presentation'],
                    'costo_unitario' => $row['cost_unit_opcional'] ?? 0,
                    'precio_compra'  => $row['price_opcional'] ?? 0,
                    'activo'         => 1,
                ]
            );

            if($recipe->wasRecentlyCreated) {
                $recipe->update([
                    'fecha_creacion' => $this->date,
                    'idUsuario'      => $this->user_id,
                ]);
            }

        });
    }

    public function rules(): array
    {
        return [
            '*.cod_susi'           => ['required'],
            '*.description'        => ['required'],
            '*.presentation'       => ['required'],
            '*.cost_unit_opcional' => 'nullable|numeric',
            '*.price_opcional'     => 'nullable|numeric',
        ];
    }
}
