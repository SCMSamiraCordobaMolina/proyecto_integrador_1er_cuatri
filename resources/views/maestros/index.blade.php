@extends('layouts.app')
@section('title')
    Maestros
@endsection
@section('content')
    <h1>Lista de maestros</h1>
    
    <table class="table">
        <tr>
            <th>Maestro</th>
            <th>DNI</th>
            <th>Foto</th>
            <th>Accion</th>
        </tr>
        @foreach ($maestros as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['dni'] }}</td>
                <td><img src="{{$item['img']}}" height="150"  alt=""></td>

                {{-- <td><a class="boton" href="{{ route('maestros.delete', $item ->id) }}">Borrar</a></td> --}}
                <td><a class="boton" href="{{ route('maestros.edit', $item) }}">Editar</a></td>
                <td>
                    <form action="{{ route('maestros.delete', $item) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="boton" type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach   
    </table>
    <a class="boton" href="{{ route('maestros.create') }}">Cargar nuevo maestro</a>
@endsection