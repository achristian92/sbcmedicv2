@extends('layouts.app')
@section('content')
    @component('components.form')
        @slot('title','Doctores')
        @slot('content')
            <form method="POST" action="{{ route('setting.users.update',$model->idUser) }}">
                @csrf
                @method('PUT')
                @include('setting.users.partials.fields',[
                   'back'=> route('setting.users.index')
               ])
           </form>
       @endslot
   @endcomponent
@endsection

