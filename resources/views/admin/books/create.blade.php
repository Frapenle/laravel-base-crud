@extends('layouts.app')

@section('content')
<div id="form-create" class="container mt-5">
    <div class="row">
        <div class="col-12">
            @include('admin.partials.form', ['route' => 'admin.books.store', 'idForm'=>'create-form', 'method' => 'POST', 'project' => $book])
        </div>
    </div>
</div>
@endsection