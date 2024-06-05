@extends('layouts.app')

@section('content')
    <x-alert type="error" :message="$message">
        Косик сьогодні молодець!
        <x-slot:title>
            Bogdan також
            </x-slot:title>
    </x-alert>

    <div class="container mt-5">
        <h1 class="mb-4">Список фільмів</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ $movie->poster }}" alt="{{ $movie->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->description }}</p>
                            <p> {{ $movie->user->name }}</p>
                            <div class="movie-genres">
                                @foreach($movie->genres as $genre)
                                    <a href="{{ route('movies.index') }}"> {{ $genre->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $movies->links() }}
        </div>
    </div>
@endsection
