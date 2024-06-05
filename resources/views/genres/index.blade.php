@extends('layouts.app')

@section('content')
    <style>
        .card-genre {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card-genre:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .card-genre img {
            max-height: 200px;
            object-fit: cover;
        }
        .genre-description {
            height: 60px;
            overflow: hidden;
        }
    </style>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Список жанрів</h1>
        <div class="row">
            @foreach ($genres as $genre)
                <div class="col-md-4 mb-4">
                    <div class="card card-genre">
                        @if ($genre->image)
                            <img class="card-img-top" src="{{ $genre->image }}" alt="{{ $genre->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $genre->name }}</h5>
                            <p class="card-text genre-description">{{ $genre->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
