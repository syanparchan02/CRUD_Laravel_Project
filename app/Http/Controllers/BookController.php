<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // GET /api/books
    public function index()
    {
        return Book::all(); // Returns all books as JSON
    }

    // GET /api/books/{id}
    public function show($id)
    {
        return Book::findOrFail($id);
    }

    // POST /api/books
    public function store(Request $request)
    {
        $book = Book::create($request->only('title', 'author', 'published_year'));
        return response()->json($book, 201);
    }

    // PUT /api/books/{id}
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->only('title', 'author', 'published_year'));
        return response()->json($book);
    }

    // DELETE /api/books/{id}
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return response()->json(['message' => 'Book deleted']);
    }
}
