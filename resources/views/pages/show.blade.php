@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <h1>
        [
            {{ $comic -> id }}
        ]
        Comic:
        {{ $comic -> title }}
        <br>
        Nome Autore:
        {{ $comic -> author_firstname }}
        {{ $comic -> author_lastname }}
    </h1>
    <h2>Genere: {{ $comic -> genre }}</h2>
    <h2>Data pubblicazione: {{ $comic -> date_of_publish }}</h2>
@endsection