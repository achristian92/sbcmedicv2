@extends('layouts.app')
@section('content')
    @component('components.form')
        @slot('title', 'Sedes')
        @slot('content')
            <form method="POST" action="{{ route('landing.locals.store') }}">
                @csrf
                @include('landing.locals.partials.fields',[
                    'back'=> route('landing.locals.index')
                ])
            </form>
        @endslot
    @endcomponent
@endsection

