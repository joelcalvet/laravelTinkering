@extends('layouts.app')

@section('content')
    <h1>{{ $movie->title }}</h1>
    <p>{{ $movie->description }}</p>
    <p><strong>Year:</strong> {{ $movie->year }}</p>
    <p><strong>Genre:</strong> {{ $movie->genre }}</p>
    <p><strong>Available:</strong> {{ $movie->available ? 'Yes' : 'No' }}</p>
    <a href="{{ route('movies.index') }}" class="btn btn-secondary">Back to Movies</a>
@endsection
