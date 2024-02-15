@extends('layouts.main-layout')
@section('head')
    <title>Index</title>
@endsection
@section('content')
    <h1>Comics: {{count($comics)}}</h1>
    <a href="{{route('comics.create')}}">CREATE</a>
    <br><br>
    <ul>
        @foreach ($comics as $comic)
           <li>
                <a href="{{route('comics.show', $comic -> id)}}">
                    
                    {{$comic -> title}}
                    {{$comic -> author_firstname}}
                    {{$comic -> author_lastname}}
                    {{$comic -> genre}}
                    {{$comic -> date_of_publish}}

                </a>
           </li>  
        @endforeach  
    </ul>
@endsection
