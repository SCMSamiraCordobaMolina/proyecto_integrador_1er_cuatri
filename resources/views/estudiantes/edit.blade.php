@extends('layouts.app')

@section('title', 'Estudiantes')

@section('content')

    <h1>Editar Estudiante</h1>

    <form class="editar" action="{{ route('estudiantes.update', $estudiante) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('estudiantes._partials.campos-form')
    </form>
    <a href="{{ route('estudiantes.index') }}">Regresar</a>

@endsection
