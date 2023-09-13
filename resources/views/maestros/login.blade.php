@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <h1>Login</h1>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label>
            <span>Email</span>

            <input name="email" type="email" value="{{ old('email') }}"> <br>
            @error('email')
                <small style="color: red">{{ $message }}</small>
                <br>
            @enderror
        </label>
        <label>
            <span>Password</span>

            <input name="password" type="password"> <br>
            @error('password')
                <small style="color: red">{{ $message }}</small>
                <br>
            @enderror
        </label>
        <label>
            <span>Recuerdame</span>
            <input name="remember" type="checkbox"> <br>
        </label>

        <button type="submit">Login</button> <br>

    </form>

@endsection