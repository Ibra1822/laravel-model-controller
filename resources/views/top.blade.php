@extends('layouts.main')

@section('content')
<h1>Best Movies</h1>
<div class="cont-cards">
    @foreach ($topMovies as $movie)
        <div class="card">
            <div>
              <h2>TITLE: {{$movie->title}}</h2>
              <h3>ORIGINAL TITLE:{{$movie->original_title}}</h3>
              <p>COUNTRY: {{$movie->nationality}}</p>
              <p>DATE: {{$movie->date}}</p>
              <h3>VOTE: {{$movie->vote}}</h3>
            </div>
        </div>
    @endforeach
</div>
@endsection
