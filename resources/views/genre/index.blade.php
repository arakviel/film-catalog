@extends('layouts.app')

@section('title', 'Жанри')

@section('content')
    <h1>Genres</h1>
    <a href="{{ route('genres.create') }}">Create Genre</a>
    <ul>
        @foreach ($genres as $genre)
            <li>
                <a href="{{ route('genres.show', $genre->id) }}">{{ $genre->name }}</a>
                <a href="{{ route('genres.edit', $genre->id) }}">Edit</a>
                <form action="{{ route('genres.destroy', $genre->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
