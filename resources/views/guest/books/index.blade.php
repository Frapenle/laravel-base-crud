@extends('layouts.app')

@section('content')
    <div class="cards-container d-flex justify-around flex-wrap">
        @foreach ($books as $book)
            <div class="card m-4" style="width: 20rem;">
                <img src="{{ $book->cover }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><span class="fs-4">Author:</span> {{ $book->author }}</h5>
                    <h6 class="fs-5">Book description:</h6>
                    <p class="card-text py-2">{{ $book->description }}</p>
                    <h6 class="card-text"><span class="fs-5">Genre:</span> {{ $book->genre }}</h6>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-success ">Show Info</a>
                    <div class="card-footer text-muted mt-3">
                        <h5>Pubblication date:</h5>
                        <p class="card-text">{{ $book->release_date }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
