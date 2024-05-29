@extends('layouts.app')

@section('content')
    <h1>Add New Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumbnail URL</label>
            <input type="url" name="thumb" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="date" name="sale_date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Comic</button>
    </form>
@endsection
