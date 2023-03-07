<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller {
    public function index() {
        $books = Book::all();
        return response()->json([
            'success' => true,
            'results' => $books
        ]);
    }
}
