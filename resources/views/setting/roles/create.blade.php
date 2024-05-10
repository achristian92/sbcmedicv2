@extends('layouts.app')
@section('content')
    @component('components.form')
        @slot('title','Roles')
        @slot('content')
            <form method="POST" action="{{ route('setting.roles.store') }}">
                @csrf
                @include('setting.roles.partials.fields',[
                    'back'=> route('setting.roles.index')
                ])
           </form>
       @endslot
   @endcomponent
@endsection

