@extends('layouts.app')
@section('content')
    @component('components.form')
        @slot('title','Exámenes')
        @slot('content')
            <form method="POST" action="{{ route('setting.exams.update',$model) }}">
                @csrf
                @method('PUT')
                @include('setting.exams.partials.fields',[
                   'back'=> route('setting.exams.index')
               ])
           </form>
       @endslot
   @endcomponent
@endsection

