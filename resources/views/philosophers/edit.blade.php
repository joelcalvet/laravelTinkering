@extends('layouts.app')

@section('content')
    <h1>{{ isset($philosopher) ? 'Editar Filòsof' : 'Afegir Filòsof' }}</h1>
    <form action="{{ isset($philosopher) ? route('philosophers.update', $philosopher) : route('philosophers.store') }}" method="POST">
        @csrf
        @if(isset($philosopher))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $philosopher->name ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descripció</label>
            <textarea name="description" id="description" class="form-control" required>{{ old('description', $philosopher->description ?? '') }}</textarea>
        </div>
        <div class="form-group">
            <label for="birth_year">Any de Naixement</label>
            <input type="number" name="birth_year" id="birth_year" class="form-control" value="{{ old('birth_year', $philosopher->birth_year ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="country">País</label>
            <input type="text" name="country" id="country" class="form-control" value="{{ old('country', $philosopher->country ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="went_crazy">Es va tornar boig?</label>
            <select name="went_crazy" id="went_crazy" class="form-control" required>
                <option value="1" {{ old('went_crazy', $philosopher->went_crazy ?? '') == 1 ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ old('went_crazy', $philosopher->went_crazy ?? '') == 0 ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">{{ isset($philosopher) ? 'Actualitzar' : 'Afegir' }} Filòsof</button>
    </form>
@endsection
