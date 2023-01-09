@extends('layouts.main')

@section('content')
<h1>Movies</h1>

<div class="cont-cards">
    @foreach ($movies as $movie)
        <div class="card">
            <div>
              <h2>{{$movie->title}}</h2>
              <h3>{{$movie->original_title}}</h3>
              <p>{{$movie->nationality}}</p>
              <p>{{$movie->date}}</p>
            </div>
        </div>
    @endforeach
</div>

@endsection
