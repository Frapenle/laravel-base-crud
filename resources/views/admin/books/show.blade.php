@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="card p-3 text-center">
        <h2>Title:{{$book->title}}</h2>
        {{-- <img src="{{asset('storage/'. $book->cover)}}" alt="placeholder"> --}}
        <pre>Author:{{$book->author}}</pre>
        <pre>Genre:{{$book->genre}}</pre>
        <pre>Release Date:{{$book->release_date}}</pre>
        <pre>ISBN:{{$book->ISBN}}</pre>
        <p>DESCRIPTION:{{$book->description}}</p>
    </div>
    <form action="{{ route('admin.books.destroy', $book->id)}}" method="post" class="d-inline-block form-deleter">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger"> Delete </button>
    </form>
    <a href=" {{route('admin.books.edit', $book->id)}} " class="btn btn-warning">Edit</i></a>


    
    
</div>




@endsection