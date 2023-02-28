@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="messages w-100 d-flex gap-2 p-1">
                <h1>Trash</h1>
                {{--  alert messages --}}
                <div class="w-100 d-flex gap-2 align-items-center">
                    @if (session('message'))
                    <div class="message alert text-center flex-grow-1 {{session('alert-type')}}">
                        <span>{{session('message')}}</span>
                    </div>
                    @endif
                    <a href="{{route('admin.books.index')}}" class="ms-auto btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            {{-- table --}}
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        {{-- <th scope="col">Description</th> --}}
                        <th scope="col" class="d-flex justify-content-end gap-2">
                            <form class="d-inline" action="{{route('admin.restore-all')}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-light" title="restore-all">Restore all</button>
                            </form>  
                            <form class="d-inline" action="{{route('admin.delete-all')}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" title="delete-all">Delete all</button>
                            </form>  
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
                            {{-- <td>{{$book->description}}</td> --}}
                            <td class="d-flex gap-1 justify-content-end">
                                <a href=" {{route('admin.books.restore', $book->id)}} " class="btn btn-dark">Restore</i></a>
                                
                                <form action="{{ route('admin.books.forceDelete', $book->id)}}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
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