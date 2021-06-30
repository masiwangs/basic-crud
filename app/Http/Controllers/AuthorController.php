<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Author;

class AuthorController extends Controller
{
  public function index()
  {
    $authors = Author::get();
    return view('authors.index', compact('authors'));
  }

  public function show($id)
  {
    $author = Author::findOrFail($id);
    return view('authors.show', compact('author'));
  }

  public function store(Request $request)
  {
    $author = Author::create([
      'name' => $request->name,
      'phone' => $request->phone
    ]);
    return redirect('authors');
  }

  public function edit($id)
  {
    $author = Author::findOrFail($id);
    return view('authors.edit', compact('author'));
  }

  public function update(Request $request, $id)
  {
    $author = Author::findOrFail($id);
    $author->update($request->all());
    return redirect('/authors/'.$id);
  }

  public function delete($id)
  {
    $author = Author::findOrFail($id);
    $author->delete();
    return redirect('/authors');
  }
}
