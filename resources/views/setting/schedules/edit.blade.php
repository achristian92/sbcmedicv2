@extends('layouts.app')
@section('content')
    @component('components.form')
        @slot('title','Doctores')
        @slot('content')
            <form method="POST" action="{{ route('setting.doctors.update',$model) }}">
                @csrf
                @method('PUT')
                @include('setting.doctors.partials.fields',[
                   'back'=> route('setting.doctors.index')
               ])
           </form>
       @endslot
   @endcomponent
@endsection

