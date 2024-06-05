@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Додати новий фільм</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('movies.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Назва фільму</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>
            <div class="form-group">
                <label for="description">Опис</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="poster">Посилання на постер</label>
                <input type="url" class="form-control" id="poster" name="poster" value="{{ old('poster') }}" required>
            </div>
            <div class="form-group">
                <label for="genres">Жанри</label>
                <select multiple class="form-control" id="genres" name="genres[]" required>
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Додати фільм</button>
        </form>
    </div>
@endsection
