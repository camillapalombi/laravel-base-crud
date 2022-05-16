@extends('templates.base')

@section('pageTitle', 'Comics Listing')

@section('pageMain')

<div class="container">

    <div class="row g-5">

        @foreach ($comics as $comic)

        <div class="col-4">

            <div class="card h-100">

                <div>
                    <img class="comics-thumbs" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <h3> <a class="title-link" href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a> </h3>
                    <div>{{ $comic->description }}</div>
                    <div> <h5>Prezzo:</h5> {{ $comic->price }}$ </div>
                    <div><h5>Serie:</h5> {{ $comic->series }}</div>
                    <div><h5>Data:</h5> {{ $comic->date }}</div>
                    <div><h5>Tipo:</h5> {{ $comic->type }}</div>
                </div>

                <div class="btn-edit-delete">
                    <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">Edit</a>

                    <button class="btn btn-danger btn-delete" data-id="{{ $comic->id }}">Delete</button>
                </div>
                
            </div>

        </div>
    
        @endforeach
    </div>

</div>


<!--PAGINAZIONE -->
{{ $comics->links() }}


<section id="delete-confirm" class="d-none">
    <div class="pop-up">
        <h3>Sei sicuro di voler eliminare?</h3>
        <div class="d-flex justify-content-center">
            <button id="btn-no" class="btn btn-success me-3">NO</button>
            <form method="POST" data-base="{{ route('comics.index') }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">SI</button>
            </form>
        </div>
    </div>
</section>


@endsection

