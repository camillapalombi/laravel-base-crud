@extends('templates.base')

@section('pageTitle', 'DC Comics - HomePage')

@section('pageMain')


<div class="home-page">

    <h1>Benvenuto in DC Comics</h1>

    <h2>
        <a href="{{ route('comics.index')}}">Dai un occhiata ai nostri fumetti più famosi!</a>
    </h2>

</div>


@endsection