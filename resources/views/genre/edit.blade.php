@extends('layouts.app')

@section('content')
    <h1>Edit Genre</h1>
    <form action="{{ route('genres.update', $genre->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" value="{{ $genre->slug }}" required>
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $genre->name }}" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" required>{{ $genre->description }}</textarea>
        </div>
        <div>
            <label for="image">Image URL</label>
            <input type="text" name="image" id="image" value="{{ $genre->image }}">
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
