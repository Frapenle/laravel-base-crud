@extends('layouts.app')

@section('content')
    @foreach ($books as $book)
        <div class="card m-5 w-75">
            <div class="card-header">
                <img src="{{ $book->cover }}" alt="books image">
            </div>
            <div class="card-body">
                <h5 class="card-title"><span class="fs-4">Author:</span> {{ $book->author }}</h5>
                <h6 class="fs-5">Book description:</h6>
                <p class="card-text">{{ $book->description }}</p>
                <h6 class="card-text"><span class="fs-5">Genre:</span> {{ $book->genre }}</h6>
                <div class="card-footer text-muted">
                    <h5>Pubblication date:</h5>
                    <p class="card-text">{{ $book->release_date }}</p>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-success ">Show</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
