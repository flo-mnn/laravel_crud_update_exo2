@extends('template.main')
@section('content')
    <h1 class="text-center">{{$member->nom}}</h1>
    
    @include('partials.form')
@endsection