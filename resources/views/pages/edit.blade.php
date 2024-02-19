@extends('layouts.main-layout')
@section('head')
    <title>Edit</title>
@endsection
@section('content')
    <h1>
        {{$comic -> id}}
        EDIT COMIC  
    </h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action=" {{ route('comics.update', $comic -> id)}}" method="POST">

        @csrf 
        @method('PUT')

        <label for="title">Titolo</label>
        <input type="text" name="title" id="title" value="{{$comic -> title}}">
        <br>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="author_firstname">Nome Autore</label>
        <input type="text" name="author_firstname" id="author_firstname" value="{{$comic -> author_firstname}}">
        <br>
        <label for="author_lastname">Cognome Autore</label>
        <input type="text" name="author_lastname" id="author_lastname" value="{{$comic -> author_lastname}}">
        <br>
        <label for="genre">Genere</label>
        <input type="text" name="genre" id="genre" value="{{$comic -> genre}}">
        <br>
        <label for="date_of_publish">Data di pubblicazione</label>
        <input type="text" name="date_of_publish" id="date_of_publish" value="{{$comic -> date_of_publish}}">
        <br>
        <input type="submit" value="UPDATE">
    </form>
@endsection