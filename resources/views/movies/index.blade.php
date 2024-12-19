@extends('layouts.app')

@section('content')
    <h1>Movies</h1>
    <a href="{{ route('movies.create') }}" class="btn btn-primary mb-3">Afegir Movie</a>
    <table class="table">
        <thead>
        <tr>
            <th>Títol</th>
            <th>Any</th>
            <th>Gènere</th>
            <th>Accions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->year }}</td>
                <td>{{ $movie->genre }}</td>
                <td>
                    <a href="{{ route('movies.show', $movie) }}" class="btn btn-info">Veure</a>
                    <a href="{{ route('movies.edit', $movie) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('movies.destroy', $movie) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
