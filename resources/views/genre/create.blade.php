@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Створити Жанр</h1>
        <form action="{{ route('genres.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" required>
            </div>
            <div class="form-group">
                <label for="name">Назва</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="description">Опис</label>
                <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">URL зображення</label>
                <input type="text" class="form-control" name="image" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Зберегти</button>
        </form>
    </div>
@endsection
