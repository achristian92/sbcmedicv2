@extends('layouts.app')
@section('content')
    @component('components.form')
        @slot('title','Especialidades')
        @slot('content')
            <form method="POST" action="{{ route('landing.specialties.update', $model) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('landing.specialties.partials.fields',[
                   'back'=> route('landing.specialties.index')
               ])
            </form>
        @endslot
    @endcomponent
@endsection

