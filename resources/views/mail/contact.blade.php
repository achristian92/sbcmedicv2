@extends('layouts.mail')
@section('content')
    <h6 style="font-size: 18px; margin: 0; margin-bottom: 5px">Datos del contacto</h6>
    <ul>
        <li><b>Nombre:</b> {{ $name }}</li>
        <li><b>Número de contacto:</b> {{ $telephone }}</li>
        <li><b>Doc. de Identidad:</b> {{ $document }}</li>
        <li><b>Especialidad:</b> {{ $specialty }}</li>
        <li><b>Consulta:</b> <br> {{ $messages }}</li>
    </ul>
@endsection
