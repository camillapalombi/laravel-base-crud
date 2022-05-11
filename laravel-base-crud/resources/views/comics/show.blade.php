@extends('templates.base')

@section('pageTitle', $pageTitle)

@section('pageMain')
    <div class="container">
        <div class="row g-4">
            <div class="col-8">

                <img class="comics-thumbs" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <h3> <a class="title-link" href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a> </h3>
                <div>{{ $comic->description }}</div>
                <div> <h5>Prezzo:</h5> {{ $comic->price }}$ </div>
                <div><h5>Serie:</h5> {{ $comic->series }}</div>
                <div><h5>Data:</h5> {{ $comic->date }}</div>
                <div><h5>Tipo:</h5> {{ $comic->type }}</div>
                
            </div>
        </div>
    </div>
@endsection