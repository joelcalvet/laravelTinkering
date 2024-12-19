@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">Benvingut a la nostra aplicació</h1>
        <p class="lead">Accedeix a les nostres seccions de Movies i Filosofos.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('movies.index') }}" role="button">Movies</a>
        <a class="btn btn-secondary btn-lg" href="{{ route('philosophers.index') }}" role="button">Filosofos</a>
    </div>
@endsection
