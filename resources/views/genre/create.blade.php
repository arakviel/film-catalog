@extends('layouts.app')

@section('content')
    <h1>Create Genre</h1>
    <form action="{{ route('genres.store') }}" method="POST">
        @csrf
        <div>
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" required>
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <div>
            <label for="image">Image URL</label>
            <input type="text" name="image" id="image">
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
