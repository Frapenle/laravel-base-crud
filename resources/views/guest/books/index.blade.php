@extends('layouts.app')

@section('content')
    <div class="cards-container d-flex justify-content-evenly flex-wrap ">
        @foreach ($books as $book)
            <a href="{{ route('books.show', $book->id) }}" class="card-link">
                <div class="card-book card-hover m-3">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ $book->cover }}" alt="Image description">
                        <div class="overlay">
                            <h5>{{ $book->title }}</h5>
                            <h6>{{ $book->author }}</h6>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
