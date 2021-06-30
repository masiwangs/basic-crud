@extends('components.layout')

@section('content')
  <div class="container">
    <div class="card mb-0 border-0 bg-white shadow-secondary">
      <div class="card-body">
        <p class="card-title fw-bold"><i class="bi bi-bookmark-plus-fill"></i> EDIT BUKU</p>
        <hr class="bg-white">
        <form action="/books/{{ $book->id }}/edit" method="POST">
          @csrf
          <div class="mb-3">
            <label for="" class="form-label">Nama Buku</label>
            <input type="text" name="name" id="" class="form-control" value="{{ $book->name }}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Synopsis</label>
            <textarea name="synopsis" rows="3" class="form-control">{{ $book->synopsis }}</textarea>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Penulis</label>
            <select class="form-select" aria-label="Default select example" name="author_id" required>
              <option selected>Pilih salah satu</option>
              @foreach (\App\Models\Author::get() as $author)
              <option value="{{ $author->id }}" @if ($author->id === $book->author_id) selected @endif>{{ $author->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Tag</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tags[]" id="tag_misteri" value="misteri" @if (in_array('misteri', json_decode($book->tags))) checked @endif>
                <label class="form-check-label" for="tag_misteri">Misteri</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tags[]" id="tag_horror" value="horror" @if (in_array('horror', json_decode($book->tags))) checked @endif>
                <label class="form-check-label" for="tag_horror">Horror</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tags[]" id="tag_fiksi" value="fiksi" @if (in_array('fiksi', json_decode($book->tags))) checked @endif>
                <label class="form-check-label" for="tag_fiksi">Fiksi</label>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button class="btn btn-success text-light">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection