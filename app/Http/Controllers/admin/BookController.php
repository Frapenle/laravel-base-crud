<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    protected $rules = [
        'ISBN' => 'required|size:13|unique:books,ISBN',
        'title' => 'required|min:5|max:255',
        'author' => 'required|min:2|max:255',
        'genre' => 'required|min:5|max:20',
        'description' => 'required|min:10',
        'cover' => 'min:5|max:255',
        'release_date' => 'required|date',
        'category_id' => ['required', 'exists:categories,id']
    ];

    protected $messages = [
        'ISBN.required' => 'ISBN obbligatorio',
        'ISBN.size' => 'ISBN obbligatoriamente di 13 caratteri',
        'title.required' => 'Il titolo è obbligatorio',
        'title.min' => 'Inserisci almeno 5 caratteri per il titolo',
        'author.required' => 'è obbligatorio inserire un autore',
        'genre.required' => 'il genere è obbligatorio',
        'description.required' => 'La descrizione del libro è obbligatoria',
        'description.min' => 'Inserisci almeno 10 caratteri per la descrizione',
        'release_date.required' => 'Inserisci una data',
        'category_id.required' => 'Campo obbligatorio',
        'category_id.exists' => 'errore',

    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::all();
        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.books.create', ["book" => new Book(), 'categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();


        // $newRules['ISBN']= 'required|string|size:13|unique:books';

        $request->validate($this->rules, $this->messages);

        $newBook = new Book();
        $newBook->fill($data);
        $newBook->save();
        return redirect()->route('admin.books.show', $newBook->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
        return view('admin.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
        return view('admin.books.edit', ['book' => $book, 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
        $data = $request->all();
        $req = $request->validate($this->rules, $this->messages);
        // dd($req);

        $book->update($data);
        return redirect()->route('admin.books.show', $book->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.books.index');
    }

    public function restoreDeleted($id)
    {
        $book = Book::onlyTrashed()->find($id);
        // ======= fix problem with title ==========
        // dd($book->id);
        // dd($book->title);
        $message = "{$book->id} è stato ripristinato";
        return redirect()->route('admin.books.trashed')->with('message', $message)->with('alert-type', 'alert-success');
    }

    public function trashed()
    {
        $books = Book::onlyTrashed()->get();
        return view('admin.books.trashed', compact('books'));
    }

    public function forceDelete($id)
    {
        $book = Book::onlyTrashed()->find($id);
        $book->forceDelete();
        $message = "{$book->title} has been permanently deleted";
        return redirect()->route('admin.books.trashed')->with('message', $message)->with('alert-type', 'alert-danger');
    }

    // restore and delete all
    public function restoreAll()
    {
        Book::onlyTrashed()->restore();
        $message = 'All records are successfully deleted';

        return redirect()->route('admin.books.index')->with('message', $message)->with('alert-type', 'alert-success');
    }

    public function deleteAll()
    {
        $test = Book::onlyTrashed()->forceDelete();
        $message = 'All records are successfully deleted';
        return redirect()->route('admin.books.index')->with('message', $message)->with('alert-type', 'alert-danger');
    }
}
