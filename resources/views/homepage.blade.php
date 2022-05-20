@extends('layouts.base_layout')

@section('homepage')
    <div class="contaner-fluid px-5">
        <div class="row flex-wrap justify-content-center">
            @foreach ($movies as $movie)
                <div class="col-5 movieCard text-center">
                    <div class="poster w-50 d-flex justify-content-center">
                        <img class="w-100 rounded" src="{{ $movie['poster'] }}" alt="{{ $movie['title'] }}">
                    </div>
                    <h1>{{ $movie['title'] }}</h1>
                    <div class="originalTitle">
                        <h5>Original Title: </h5>
                        <h2>{{ $movie['original_title'] }}</h2>
                    </div>
                    <p>Nationality: {{ $movie['nationality'] }}</p>
                    <h6>Release Date: {{ $movie['date'] }}</h6>
                    <h6>Vote: {{ $movie['vote'] }}/10</h6>
                </div>
            @endforeach
        </div>
    </div>
@endsection
