@extends('layouts.app')

@section('content')
    <h1>Filosofos</h1>
    <a href="{{ route('philosophers.create') }}" class="btn btn-primary mb-3">Afegir Filòsof</a>
    <table class="table">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Any de Naixement</th>
            <th>País</th>
            <th>Es va tornar boig?</th>
            <th>Accions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($philosophers as $philosopher)
            <tr>
                <td>{{ $philosopher->name }}</td>
                <td>{{ $philosopher->birth_year }}</td>
                <td>{{ $philosopher->country }}</td>
                <td>{{ $philosopher->went_crazy ? 'Sí' : 'No' }}</td>
                <td>
                    <a href="{{ route('philosophers.show', $philosopher) }}" class="btn btn-info">Veure</a>
                    <a href="{{ route('philosophers.edit', $philosopher) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('philosophers.destroy', $philosopher) }}" method="POST" style="display: inline;">
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
