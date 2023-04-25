@extends('layouts.app')
@section('content')
    @component('components.form')
        @slot('title','Especialidades')
        @slot('content')
            <form method="POST" action="{{ route('service.specialties.store') }}">
                @csrf
                @include('service.specialties.partials.fields',[
                    'back'=> route('service.specialties.index')
                ])
           </form>
       @endslot
   @endcomponent
@endsection

