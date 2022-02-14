@extends('layouts.base')

@section('content')

<h1 class="page-header">Add a new Comic</h1>
<form action="{{ route('comics.store') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control  @error('title') is-invalid @enderror"" id="title" placeholder="Add comic's name here" name="title" value="{{old("title")}}">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
       <label for="image">Image</label>
       <input type="text" class="form-control  @error('image') is-invalid @enderror"" id="image" placeholder="Add image here" name="image"value="{{old("image")}}">
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control  @error('description') is-invalid @enderror"" id="description" rows="3" placeholder="Add description here" name="description"value="{{old("description")}}"></textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control  @error('price') is-invalid @enderror"" id="price" placeholder="Add price here" name="price"value="{{old("price")}}">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="series">Series</label>
        <input type="text" class="form-control  @error('series') is-invalid @enderror"" id="series" placeholder="Add series here" name="series"value="{{old("series")}}">
        @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="sale_date">Sale's date</label>
        <input type="date" class="form-control  @error('sale_date') is-invalid @enderror"" id="sale_date" placeholder="Add sale's date  here" name="sale_date"value="{{old("sale_date")}}">
        @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Add type here" name="type"value="{{old("type")}}">
        @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <input class="btn btn-primary p-3 my-3" type="submit" value="Submit">
    <a class="btn btn-primary p-3 my-3" href="{{ route('comics.index') }}" role="button">Go back to the comics</a>
</form>
@endsection
