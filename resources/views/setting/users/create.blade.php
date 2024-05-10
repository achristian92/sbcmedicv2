@extends('layouts.app')
@section('content')
    @component('components.form')
        @slot('title','Usuarios')
        @slot('content')
            <form method="POST" action="{{ route('setting.users.store') }}">
                @csrf
                @include('setting.users.partials.fields',[
                    'back'=> route('setting.users.index')
                ])
           </form>
       @endslot
   @endcomponent
@endsection

