@extends('templates.base')

@section('pageTitle', 'Create new comics listing')

@section('pageMain')
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('comics.store') }}">

                    @csrf

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="text" class="form-control" id="image" name="thumb">
                      </div>

                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>

                    <div class="mb-3">
                        <label for="Type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="Type" name="type">
                    </div>
                   
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection