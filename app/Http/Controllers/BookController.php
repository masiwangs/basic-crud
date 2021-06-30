<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
  public function index(Request $request)
  {
    $books = Book::query();

    if($request->name)
    {
      $books = $books->where('name', 'like', '%'.$request->name.'%');
    }

    $books = $books->get();

    return view('books.index', compact('books'));
  }

  /**
   * Fungsi ini digunakan untuk menyimpan buku
   */
  public function store(Request $request)
  {
    $book = Book::create([
      'name' => $request->name,
      'synopsis' => $request->synopsis,
      'tags' => json_encode($request->tags),
      'author_id' => $request->author_id
    ]);
    return redirect('/books/'.$book->id);
  }

  /**
   * Fungsi ini digunakan untuk menampilkan
   * halaman detail book dengan id $id
   */
  public function show($id)
  {
    $book = Book::findOrFail($id);
    return view('books.show', compact('book'));
  }

  /**
   * Fungsi ini digunakan untuk menampilkan
   * form edit book dengan id $id
   */
  public function edit($id)
  {
    $book = Book::findOrFail($id);
    return view('books.edit', compact('book'));
  }

  /**
   * Fungsi ini gidunakan untuk menyimpan data
   * dari form edit pada fungsi edit.
   * 
   * Buku yang diupdate memiliki id = $id,
   * data yang diupdate disimpan dalam $request;
   * 
   * Setelah update disimpan, halaman akan me-redirect
   * ke alamat /books
   */
  public function update(Request $request, $id)
  {
    $book = Book::findOrFail($id);
    
    // individual update berdasarkan field
    if($request->name)
    {
      $book->name = $request->name;
    }

    if($request->synopsis)
    {
      $book->synopsis = $request->synopsis;
    }

    if($request->tags)
    {
      $book->tags = json_encode($request->tags);
    }

    $book->save();

    return redirect('/books/'.$id);
  }

  /**
   * Fungsi ini digunakan untuk menghapus buku
   * dengan id buku = $id.
   * 
   * Setelah dihapus halaman me-redirect ke /books
   * atau http://127.0.0.1:8000/books
   */
  public function delete($id)
  {
    $book = Book::findOrFail($id);
    $book->delete();
    return redirect('/books');
  }
}
