@extends('layouts.app')

@section('content')
    <h1>{{ $philosopher->name }}</h1>
    <p>{{ $philosopher->description }}</p>
    <p><strong>Any de Naixement:</strong> {{ $philosopher->birth_year }}</p>
    <p><strong>País:</strong> {{ $philosopher->country }}</p>
    <p><strong>Es va tornar boig?</strong> {{ $philosopher->went_crazy ? 'Sí' : 'No' }}</p>
    <a href="{{ route('philosophers.index') }}" class="btn btn-primary">Tornar</a>
@endsection
