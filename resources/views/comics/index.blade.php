@extends('layouts.base')

@section('content')
    <a class="btn btn-success p-3 my-3" href="{{ route('comics.create') }}" role="button">Add Comic</a>
    <table class="table table-dark w-auto">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">price</th>
        <th scope="col">series</th>
        <th scope="col">sale's date</th>
        <th scope="col">type</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($comics as $comic )
        <tr class="">
            <th scope="row">{{ $comic['id'] }}</th>
            <td>{{ $comic['title'] }}</td>
            <td><img src="{{ $comic['image'] }}" alt=""></td>
            <td>{{ $comic['description'] }}</td>
            <td>{{ $comic['price'] }}</td>
            <td>{{ $comic['series'] }}</td>
            <td>{{ $comic['sale_date'] }}</td>
            <td>{{ $comic['type'] }}</td>
            <td>
                <a class="btn btn-secondary my-2" style="min-width: 100px" href="{{ route('comics.show',$comic->id) }}" role="button">Info</a>
                <a class="btn btn-info my-2" style="min-width: 100px" href="{{ route('comics.edit',$comic->id) }}" role="button">Edit</a>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger my-2"style="min-width: 100px">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection
