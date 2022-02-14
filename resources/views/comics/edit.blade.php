@extends('layouts.base')

@section('content')
 <h1 class="page-header">Edit this Comic</h1>
 <form action="{{ route('comics.update',$comic->id) }}" method="post">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Add comic's name here" name="title">
    </div>

    <div class="form-group">
    <label for="image">Image</label>
    <input type="text" class="form-control" id="image" placeholder="Add image here" name="image">
    </div>

    <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" rows="3" placeholder="Add description here" name="description"></textarea>
    </div>
    <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" placeholder="Add price here" name="price">
    </div>
    <div class="form-group">
    <label for="series">Series</label>
    <input type="text" class="form-control" id="series" placeholder="Add series here" name="series">
    </div>
    <div class="form-group">
    <label for="sale_date">Sale's date</label>
    <input type="date" class="form-control" id="sale_date" placeholder="Add sale's date  here" name="sale_date">
    </div>

    <div class="form-group">
    <label for="type">Type</label>
    <input type="text" class="form-control" id="type" placeholder="Add type here" name="type">
    </div>
    <input class="btn btn-primary p-3 my-3" type="submit" value="Submit">
    <a class="btn btn-primary p-3 my-3" href="{{ route('comics.index') }}" role="button">Go back to the comics</a>
</form>
@endsection
