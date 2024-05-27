@extends('layouts.app')

@section('content')
    <h1>{{ $genre->name }}</h1>
    <p>{{ $genre->description }}</p>
    @if($genre->image)
        <img src="{{ $genre->image }}" alt="{{ $genre->name }}">
    @endif
    <a href="{{ route('genres.index') }}">Back to list</a>
@endsection
