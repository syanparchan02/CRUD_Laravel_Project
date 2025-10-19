<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
| These routes are loaded by the Laravel framework and all of them
| will be assigned to the "api" prefix automatically.
|
*/



Route::get('/books', function (Request $request) {
    return Book::all();
});


Route::post('/books', function(Request $request) {
    return Book::create($request->all());
});

Route::get('/books/{id}', function($id) {
    return Book::findOrFail($id);
});


Route::put('/books/{id}', function(Request $request, $id) {
    $book = Book::findOrFail($id);
    $book->update($request->all());
    return $book;
});

Route::delete('/books/{id}', function($id) {
    Book::findOrFail($id)->delete();
    return response()->json(['status' => 'Book deleted successfully']);
});



// Optional: Get authenticated user
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

