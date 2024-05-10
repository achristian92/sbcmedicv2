@extends('layouts.app')
@section('content')
    @include('components.errors-and-messages')
    <div class="row">
        <div class="col-xl-9 col-md-6">
            <h5 class="mb-0">Usuarios ({{ $users->total() }})</h5>
        </div>
        <div class="col text-end">
            <a href="{{ route('setting.users.create') }}" class="btn btn-sm btn-primary">Nuevo</a>
        </div>
    </div>
    <div class="p-2 rounded-bottom">
        <form  action="{{ route('setting.users.index') }}" method="GET">
            <div class="row">
                <div class="col">
                    <input type="text" name="q" class="form-control border" placeholder="Buscar..." value="{{ request('q') }}">
                </div>
                <div class="col">
                    <select class="form-select form-control" name="status">
                        <option value="" selected>Estado</option>
                        <option value="1" {{ old('status', request('status')) === '1' ? 'selected' : '' }}>Activo</option>
                        <option value="0" {{ old('status', request('status')) === '0' ? 'selected' : '' }}>Inactivo</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-select form-control" name="rol_id">
                        <option value="" selected>Rol</option>
                        @foreach($roles as $rol)
                            <option value="{{ $rol->id }}" {{ old('rol_id', request('rol_id')) == $rol->id ? 'selected' : '' }}>{{ $rol->descripcion }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-icon btn-primary"><i class="uil uil-search"></i></button>
                </div>
            </div>
        </form>

    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive bg-white shadow rounded">
                <table class="table table-center" width="100%">
                    <thead>
                    <tr>
                        <th class="border-bottom p-3">Nombre</th>
                        <th class="border-bottom p-3">Contacto</th>
                        <th class="border-bottom p-3" width="10%">F.Nac</th>
                        <th class="border-bottom p-3" width="10%">Rol</th>
                        <th class="border-bottom p-3" width="10%">Estado</th>
                        <th class="border-bottom p-3" width="10%"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $use)
                            <tr>
                                <td class="p-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><path fill="currentColor" d="M230.92 212c-15.23-26.33-38.7-45.21-66.09-54.16a72 72 0 1 0-73.66 0c-27.39 8.94-50.86 27.82-66.09 54.16a8 8 0 1 0 13.85 8c18.84-32.56 52.14-52 89.07-52s70.23 19.44 89.07 52a8 8 0 1 0 13.85-8M72 96a56 56 0 1 1 56 56a56.06 56.06 0 0 1-56-56"/></svg>
                                    {{ $use->firstname }} {{ $use->lastname }}<br>
                                    <span class="text-muted">Nro. Documento: {{ $use->document }}</span>
                                </td>
                                <td>
                                    @if($use->email)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm8-7l8-5V6l-8 5l-8-5v2z"/></svg>
                                        {{ $use->email }}<br>
                                    @endif
                                    @if($use->phone)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z"/></svg>
                                        {{ $use->phone }}
                                    @endif

                                </td>
                                <td class="p-3">
                                    {{ \Carbon\Carbon::parse($use->birthdate)->format('d/m/Y') }}<br>
                                    @if($use->sex === 'M')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4v6h-2V7.425l-3.975 3.95q.475.7.725 1.488T15 14.5q0 2.3-1.6 3.9T9.5 20t-3.9-1.6T4 14.5t1.6-3.9T9.5 9q.825 0 1.625.237t1.475.738L16.575 6H14V4zM9.5 11q-1.45 0-2.475 1.025T6 14.5t1.025 2.475T9.5 18t2.475-1.025T13 14.5t-1.025-2.475T9.5 11"/></svg>
                                        Masculino
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 21v-2H9v-2h2v-2.1q-1.975-.35-3.238-1.888T6.5 9.45q0-2.275 1.613-3.862T12 4t3.888 1.588T17.5 9.45q0 2.025-1.263 3.563T13 14.9V17h2v2h-2v2zm1-8q1.45 0 2.475-1.025T15.5 9.5t-1.025-2.475T12 6T9.525 7.025T8.5 9.5t1.025 2.475T12 13"/></svg>
                                        Femenino
                                    @endif
                                </td>
                                <td class="p-3">{{ $use->rol }}</td>
                                <td class="p-3">
                                    @if($use->status === 1)
                                        <span class="badge bg-soft-success">Activo</span>
                                    @else
                                        <span class="badge bg-soft-danger">Inactivo</span>
                                    @endif
                                </td>
                                <td class="text-end p-3">
                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal" data-bs-target="#viewprofile"><i class="uil uil-eye"></i></a>
                                    <a href="{{ route('setting.users.edit',$use->id) }}" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-pen"></i></a>
                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3 p-3">
                    {!! $users->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

