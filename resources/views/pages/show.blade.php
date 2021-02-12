@extends('template.main')
@section('content')
    <h1 class="text-center">{{$member->nom}}</h1>
    
    @include('partials.table')

    <a href="/" class="btn btn-secondary ml-5">go back</a>
@endsection