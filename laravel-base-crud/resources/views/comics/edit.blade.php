@extends('templates.base')

@section('pageTitle', 'Edit comics listing')

@section('pageMain')
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('comics.update', $comic->id ) }}">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="text" class="form-control" id="image" name="thumb" value="{{ $comic->thumb }}" {{ old('thumb', $comic->thumb) }}>
                      </div>

                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" {{ old('title', $comic->title) }}>
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}" {{ old('series', $comic->series) }}>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}" {{ old('price', $comic->price) }}>
                    </div>

                    <div class="mb-3">
                        <label for="Type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="Type" name="type" value="{{ $comic->type }}" {{ old('type', $comic->type) }}>
                    </div>
                   
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ $comic->date }}" {{ old('date', $comic->date) }}>
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description"> {{ old('description', $comic->description) }} </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Submit</button>

                </form>

                <a class="btn btn-success mt-2" href="{{ url()->previous() }}" role="button">Back</a>

            </div>
        </div>
    </div>
@endsection