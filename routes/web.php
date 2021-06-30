<?php

use Illuminate\Support\Facades\Route;

// import controller
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get( '/', function() { return view('index'); });

Route::get( '/authors',             [AuthorController::class, 'index']);
Route::post('/authors',             [AuthorController::class, 'store']);
Route::get( '/authors/{id}',        [AuthorController::class, 'show']);
Route::get( '/authors/{id}/edit',   [AuthorController::class, 'edit']);
Route::post('/authors/{id}/edit',   [AuthorController::class, 'update']);
Route::delete('/authors/{id}/delete', [AuthorController::class, 'delete']);

Route::get( '/books',               [BookController::class, 'index']);
Route::post('/books',               [BookController::class, 'store']);
Route::get( '/books/{id}',          [BookController::class, 'show']);
Route::get( '/books/{id}/edit',     [BookController::class, 'edit']);
Route::post('/books/{id}/edit',     [BookController::class, 'update']);
Route::delete('/books/{id}/delete',   [BookController::class, 'delete']);