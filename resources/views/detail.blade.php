@extends('layouts.main');

@section('content');
  <h1>Dettaglio</h1>
    <div class="det-card">
        <h2> TITLE: {{$singleMovie->title}}</h2>
        <h3>ORIGINAL TITLE: {{$singleMovie->original_title}}</h3>
        <p>COUNTRY: {{$singleMovie->nationality}}</p>
        <p>DATE: {{$singleMovie->date}}</p>
        <p>VOTE: {{$singleMovie->vote}}</p>
    </div>
  @endsection
