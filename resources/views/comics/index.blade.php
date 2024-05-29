@extends('layouts.app')

@section('content')
    <h1>Comics List</h1>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>
                            <p class="card-text"><strong>Price:</strong> ${{ $comic->price }}</p>
                            <p class="card-text"><strong>Series:</strong> {{ $comic->series }}</p>
                            <p class="card-text"><strong>Sale Date:</strong> {{ $comic->sale_date }}</p>
                            <p class="card-text"><strong>Type:</strong> {{ $comic->type }}</p>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">View Details</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

