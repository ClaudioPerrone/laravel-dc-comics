@extends('layouts.app')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <p>{{ $comic->price }}</p>
    <p>{{ $comic->series }}</p>
    <p>{{ $comic->sale_date }}</p>
    <p>{{ $comic->type }}</p>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
@endsection
