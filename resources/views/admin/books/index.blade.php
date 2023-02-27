@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Admim Index</h1>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Description</th>
                        <th scope="col">
                            CRUD
                            <a href=" {{route('admin.books.create')}} " class="btn btn-info ms-3">Create</i></a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <th scope="row">{{$book->id}}</th>
                            <td>{{$book->ISBN}}</td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->description}}</td>
                            <td>
                                <a href=" {{route('admin.books.show', $book->id)}} " class="btn btn-primary">Show</i></a>
                                <a href=" {{route('admin.books.edit', $book->id)}} " class="btn btn-warning">Edit</i></a>
                                <form action="{{ route('admin.books.destroy', $book->id)}}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger"> Delete </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection