@extends('layouts.app')
@section('title', 'Estudiantes')
@section('content')
    <h1>Alta de Maestros</h1>

    <form class="crear" action="{{ route('maestros.store') }}" method="POST">
        @csrf
        @include('maestros._partials.campos-form')
    </form>
    <a href="{{ route('maestros.index') }}">Regresar</a>
@endsection