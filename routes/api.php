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



// // Books CRUD routes
// Route::prefix('books')->group(function () {

   
//     Route::get('/', [BookController::class, 'index']);

//     // Get a single book by id
//     Route::get('/{id}', [BookController::class, 'show']);

//     // Create a new book
//     Route::post('/', [BookController::class, 'store']);

//     // Update a book by id
//     Route::put('/{id}', [BookController::class, 'update']);

//     // Delete a book by id
//     Route::delete('/{id}', [BookController::class, 'destroy']);
// });



Route::get('/books', function (Request $request) {
    return Book::all();
});



// Optional: Get authenticated user
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});