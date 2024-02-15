@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
    <h1>
        NEW COMIC    
    </h1>
    <form action=" {{ route('comics.store')}}" method="POST">

        @csrf 
        @method('POST')

        <label for="title">Titolo</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="author">Nome Autore</label>
        <input type="text" name="author_firstname" id="author_name">
        <br>
        <label for="author">Cognome Autore</label>
        <input type="text" name="author_lastname" id="author_surname">
        <br>
        <label for="genre">Genere</label>
        <input type="text" title="genre" id="genre">
        <br>
        <label for="date_of_publish">Data di pubblicazione</label>
        <input type="text" title="date_of_publish" id="date_of_publish">
        <br>
        <input type="submit" value="CREATE">
    </form>
@endsection
