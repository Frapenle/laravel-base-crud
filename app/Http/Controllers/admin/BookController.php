<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view('admin.books.create', ["book" => new Book()]);
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

        // $newRules= $this->rules;
        // $newRules['ISBN']= 'required|string|size:13|unique:books';

        //$request->validate($this->rules, $this->messages);

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
        return view('admin.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();
        return redirect()->route('admin.books.index');
    }
}
