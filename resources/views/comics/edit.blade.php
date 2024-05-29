@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Comic</h1>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $comic->title }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required>{{ $comic->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" value="{{ $comic->price }}" required>
            </div>

            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" name="series" class="form-control" value="{{ $comic->series }}" required>
            </div>

            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input type="date" name="sale_date" class="form-control" value="{{ $comic->sale_date }}" required>
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" class="form-control" value="{{ $comic->type }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
