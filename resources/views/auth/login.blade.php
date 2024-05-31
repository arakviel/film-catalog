@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required value="{{ old('email') }}" autofocus>
                @error('email')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">remember me</label>
                <input type="checkbox" id="remember" name="remember">
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
@endsection
