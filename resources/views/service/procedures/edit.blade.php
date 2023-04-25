@extends('layouts.app')
@section('content')
    @component('components.form')
        @slot('title','Procedimeintos')
        @slot('content')
            <form method="POST" action="{{ route('service.procedures.update',$model) }}">
                @csrf
                @method('PUT')
                @include('service.procedures.partials.fields',[
                    'back'=> route('service.procedures.index')
                ])
           </form>
       @endslot
   @endcomponent
@endsection

