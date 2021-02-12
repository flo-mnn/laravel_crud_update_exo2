@extends('template.main')
@section('content')
    <div class="container">
        <h1 class="text-center">All Members</h1>
        <form action="/member/delete/all"  method="post">
            @csrf
            <button type="submit" class="btn btn-danger ml-auto">delete all</button>
        </form>
    </div>
    @include('partials.table')
@endsection