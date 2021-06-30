@extends('components.layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mb-0 border-0 bg-primary shadow-primary text-light">
          <div class="card-body">
            <p class="card-title fw-bold"><i class="bi bi-bookmark-plus-fill"></i> INPUT PENULIS BUKU BARU</p>
            <hr class="bg-white">
            <form action="/authors" method="POST">
              @csrf
              <div class="mb-3">
                <label for="" class="form-label">Nama Penulis</label>
                <input type="text" name="name" id="" class="form-control border-0" placeholder="Masukkan nama penulis">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Nomor Telefon</label>
                <input type="text" name="phone" id="" class="form-control border-0" placeholder="Masukkan nomor telefon penulis">
              </div>
              <div class="d-flex justify-content-end">
                <button class="btn btn-success text-light" type="submit">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card mb-0 border-0 bg-white shadow-secondary">
          <div class="card-body">
            <p class="card-title fw-bold"><i class="bi bi-bookmark-plus-fill"></i> INPUT BUKU BARU</p>
            <hr class="bg-white">
            <form action="/books" method="POST">
              @csrf
              <div class="mb-3">
                <label for="" class="form-label">Nama Buku</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Masukkan nama buku">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Synopsis</label>
                <textarea name="synopsis" rows="3" class="form-control"></textarea>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Penulis</label>
                <select class="form-select" aria-label="Default select example" name="author_id" required>
                  <option selected>Pilih salah satu</option>
                  @foreach (\App\Models\Author::get() as $author)
                  <option value="{{ $author->id }}">{{ $author->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Penulis</label>
                <div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="tags[]" id="tag_misteri" value="misteri">
                    <label class="form-check-label" for="tag_misteri">Misteri</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="tags[]" id="tag_horror" value="horror">
                    <label class="form-check-label" for="tag_horror">Horror</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="tags[]" id="tag_fiksi" value="fiksi">
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
    </div>
  </div>
@endsection