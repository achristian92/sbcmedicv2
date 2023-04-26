@extends('layouts.app')
@section('content')
    @component('components.form')
        @slot('title','Recetas')
        @slot('content')
            <form method="POST" action="{{ route('service.recipes.store') }}">
                @csrf
                @include('service.recipes.partials.fields',[
                    'back'=> route('service.recipes.index')
                ])
           </form>
       @endslot
   @endcomponent
@endsection

