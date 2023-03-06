@extends('layouts.app')
@section('content')

<div class="container-bg">
  <div class="jumbotron p-5 mb-4 bg-light rounded-3">
      <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>

          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://support.mondadoristore.it/in/speciali/18app-rofittane/rot-18app-230220.png" class="d-block w-100 h-10" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://support.mondadoristore.it/in/speciali/consegna/rot-consegna-gratis-2302.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://support.mondadoristore.it/in/rotatore/rot_top20ame.gif" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://support.mondadoristore.it/in/speciali/borse_zampette/rot_borsazampe2.gif" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
  </div>

  <div class="sales-books">
      <div class="container text-center fs-bold p-4">
          <h1>
              I nostri libri in sconto!
          </h1>
          <div class="card-sales d-flex justify-content-center">
            @foreach ($books as $book)
            <div class="card m-4" style="width: 20rem;">
              <img src="{{ $book->cover }}" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title"><span class="fs-4">Author:</span> {{ $book->author }}</h5>
                  <h6 class="fs-5">Book description:</h6>
                  <p class="card-text py-2">{{ $book->description }}</p>
                  <h6 class="card-text"><span class="fs-5">Genre:</span> {{ $book->genre }}</h6>
                  <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-success ">Show Info</a>
              </div>
          </div>
            @endforeach
          </div>
  </div>

  <div class="best-seller-books d-flex justify-content-center">
    <div class="container text-center fs-bold ">
        <h1 class="p-3">
            Best seller della settimana
        </h1>
        <div class="card-sales d-flex justify-content-center">
          @foreach ($books as $book)
          <div class="card m-4" style="width: 20rem;">
            <img src="{{ $book->cover }}" class="card-img-top" alt="...">
            <h5 class="card-title"><span class="fs-4">Author:</span> {{ $book->author }}</h5>
            <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-success ">Show Info</a>
        </div>
          @endforeach
        </div>
</div>
</div>
@endsection