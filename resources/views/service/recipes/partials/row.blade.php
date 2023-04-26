<tr>
    <td class="text-center">{{ $recipe->id }}</td>
    <td>{{ $recipe->descripcion }}</td>
    <td>{{ $recipe->presentacion }}</td>
    <td class="text-end">S/{{ number_format($recipe->costo_unitario,2) }}</td>
    <td class="text-end">S/{{ number_format($recipe->precio_compra,2) }}</td>
    <td class="text-center">{{ $recipe->cod_susi }}</td>
    <td class="text-center">@include('components.is-active',['status' => $recipe->activo])</td>
    <td class="text-end p-3">
        @include('components.edit',['route' => route('service.recipes.edit',$recipe)])

{{--        @includeWhen(!$recipe->activo,'components.active',['route' => route('service.recipes.status',$recipe)])--}}
{{--        @includeWhen($recipe->activo,'components.disable',['route' => route('service.recipes.status',$recipe)])--}}
    </td>
</tr>
