@extends('layouts.app')
@section('content')
    @component('components.form')
        @slot('title','Doctores')
        @slot('content')
            <form method="POST" action="{{ route('patients.update',$model->idPatient) }}">
                @csrf
                @method('PUT')
                @include('patients.partials.fields',[
                   'back'=> route('patients.index')
               ])
           </form>
       @endslot
   @endcomponent
@endsection

