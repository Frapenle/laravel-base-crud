@extends('layouts.app')

@section('content')
<div class="container text-center d-flex justify-content-center ">
   <div class="card m-3" style="width: 40rem;">
      <img src="{{ $book->cover }}" class="card-img-top" alt="Book image">
      <div class="card-body">
         <h2 class="p-4">
            <span class="fs-3 fw-bold">Author <br></span>{{ $book->author }}
         </h2>

         <h3>
            <h2 class="p-4">
               <span class="fs-3 fw-bold">Title <br></span>{{ $book->title }}
            </h2>
         </h3>

         <div class="card-text-content d-flex">
            <div class="description text-center">
               <p>
                  <span class="fs-4 fw-bold">Description <br></span>{{ $book->description }}
               </p>
            </div>
            <div class="information text-center">
               <span class="fs-4 fw-bold">info <br></span>
               <p>
                  Book genre: {{ $book->genre }}
               </p>
               <p>
                  ISBN code: {{ $book->ISBN }}
               </p>
               <p>
                  Release date: {{ $book->release_date }}
               </p>
            </div>
         </div>

      </div>
    </div>
</div>
@endsection