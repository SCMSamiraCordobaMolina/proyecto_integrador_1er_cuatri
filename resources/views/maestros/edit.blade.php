@extends('layouts.app')

@section('title', 'Maestros')

@section('content')

    <h1>Editar Maestro</h1>

    <form class="editar" action="{{ route('maestros.update', $maestro) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('maestros._partials.campos-form')
    </form>
    <a href="{{ route('maestros.index') }}">Regresar</a>

@endsection

