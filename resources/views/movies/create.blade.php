@extends('layouts.app')

@section('content')
    <h1>{{ isset($movie) ? 'Edit Movie' : 'Add Movie' }}</h1>
    <form action="{{ isset($movie) ? route('movies.update', $movie) : route('movies.store') }}" method="POST">
        @csrf
        @if(isset($movie))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $movie->title ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ old('description', $movie->description ?? '') }}</textarea>
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" name="year" id="year" class="form-control" value="{{ old('year', $movie->year ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" id="genre" class="form-control" value="{{ old('genre', $movie->genre ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="available">Available</label>
            <select name="available" id="available" class="form-control" required>
                <option value="1" {{ old('available', $movie->available ?? '') == 1 ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('available', $movie->available ?? '') == 0 ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">{{ isset($movie) ? 'Update' : 'Add' }} Movie</button>
    </form>
@endsection
