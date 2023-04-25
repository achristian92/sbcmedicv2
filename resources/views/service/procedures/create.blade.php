@extends('layouts.app')
@section('content')
    @component('components.form')
        @slot('title','Procedimientos')
        @slot('content')
            <form method="POST" action="{{ route('service.procedures.store') }}">
                @csrf
                @include('service.procedures.partials.fields',[
                    'back'=> route('service.procedures.index')
                ])
           </form>
       @endslot
   @endcomponent
@endsection

