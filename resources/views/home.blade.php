@extends('layouts.main')

@section('content')
<h1>Movies</h1>

<div class="cont-cards">
    @foreach ($movies as $movie)
    <a href="{{route('detail',$movie->id)}}">
        <div class="card">
            <div>
              <h2> TITLE: {{$movie->title}}</h2>
              <h3>ORIGINAL TITLE: {{$movie->original_title}}</h3>
              <p>COUNTRY: {{$movie->nationality}}</p>
              <p>DATE: {{$movie->date}}</p>
            </div>
        </div>
    </a>
    @endforeach
</div>

@endsection
