@extends('layouts.app')
@section('title', 'Estudiantes')
@section('content')
    <h1>Alta de Estudiantes</h1>

    <form action="{{ route('estudiantes.store') }}" method="POST">
        @csrf
        @include('estudiantes._partials.campos-form')
    </form>
    <a href="{{ route('estudiantes.index') }}">Regresar</a>
@endsection