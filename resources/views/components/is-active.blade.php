@if(isset($status))
    @if($status)
        <span class="badge bg-soft-success">Activo</span>
    @else
        <span class="badge bg-soft-danger">Inactivo</span>
    @endif
@endif
