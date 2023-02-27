
<form id="{{$idForm}}" action="{{route($route, $book->id)}}" method="POST" class="mb-3" name={{$idForm}} enctype="multipart/form-data">
@csrf
@method($method)
    
        <div class="mb-4">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title', $book->title) }}">
            @error('title')<small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="d-flex gap-2 w-100">
            <div class="mb-4 w-50">
                <label for="isbn" class="form-label">Authors</label>
                <input name="isbn" type="text" class="form-control @error('isbn') is-invalid @enderror" id="authors" value="{{ old('title', $book->ISBN) }}">
                @error('isbn')<small class="text-danger">{{$message}}</small>@enderror
            </div>

            <div class="mb-4 w-50">
                <label for="genre" class="form-label">Genres</label>
                <input name="genre" type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" value="{{ old('genre', $book->genre) }}">
                @error('genre')<small class="text-danger">{{$message}}</small>@enderror
            </div>
        </div>

        <div class="mb-4">
            <label for="cover" class="form-label">Cover</label>
            <input name="cover" type="text" class="form-control @error('cover') is-invalid @enderror" id="cover" value="{{ old('cover', $book->cover) }}">
            @error('cover')<small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="mb-4">
            <label for="description" class="form-label">Description</label>
            <input name="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" value="{{ old('description', $book->description) }}">
            @error('description')<small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="mb-4">
            <label for="release_date" class="form-label">Release date</label>
            <input name="release_date" type="text" class="form-control @error('release_date') is-invalid @enderror" id="release_date" value="{{ old('release_date', $book->release_date) }}">
            @error('release_date')<small class="text-danger">{{$message}}</small>@enderror
        </div>
    </div>
    <div class="button">
        <button type="submit" class="btn {{ $method == 'PUT' ? 'btn-warning' : 'btn-success' }}">
            {{ $method == 'PUT' ? 'Modifica' : 'Aggiungi' }}
        </button>
    </div>
</form>

{{-- 
    $table->string('ISBN', 13)->unique();
            $table->string('title');
            $table->string('author');
            $table->string('genre');
            $table->text('description');
            $table->string('cover');
            $table->dateTime('release_date');
    --}}