@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col bg-dark text-light ">
            <h1 class="text-center m-2 p-2">{{ $comic['title'] }}</h1>
            <div class="d-flex">
                <img class="p-3" src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
                <p class="mx-3 p-3">{{ $comic['description'] }}</p>
            </div>
            <a class="btn btn-primary p-3 m-3" href="{{ route('comics.index') }}" role="button">Go back to the comics</a>
        </div>
    </div>
@endsection
