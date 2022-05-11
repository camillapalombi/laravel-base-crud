@extends('templates.base')

@section('pageTitle', 'Comics Listing')

@section('pageMain')

@foreach ($comics as $comic)
                <div class="single-card">
                    <ul>
                        <li> <h3> {{ $comic->title }} </h3> </li>
                        <li> {{ $comic->description }}</li> 
                    </ul>
                </div>
@endforeach

{{ $comics->links() }}
@endsection

