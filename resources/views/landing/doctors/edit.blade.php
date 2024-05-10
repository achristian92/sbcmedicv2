@extends('layouts.app')
@section('content')
    @component('components.form')
        @slot('title','Doctores')
        @slot('content')
            <form method="POST" action="{{ route('landing.doctores.update', $model) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('landing.doctors.partials.fields',[
                   'back'=> route('landing.doctores.index')
               ])
            </form>
        @endslot
    @endcomponent
@endsection

