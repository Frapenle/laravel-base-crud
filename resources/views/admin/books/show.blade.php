@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="card p-3">
        <h2>{{$book->title}}</h2>
        {{-- <img src="{{asset('storage/'. $book->cover)}}" alt="placeholder"> --}}
        <pre>{{$book->author}}</pre>
        <pre>{{$book->genre}}</pre>
        <pre>{{$book->release_date}}</pre>
        <pre>{{$book->ISBN}}</pre>
        <p>{{$book->description}}</p>
    </div>


    
    
</div>




@endsection