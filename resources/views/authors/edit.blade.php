@extends('components.layout')

@section('content')
  <div class="container">
    <div class="card mb-0 border-0 bg-white shadow-secondary">
      <div class="card-body">
        <p class="card-title fw-bold"><i class="bi bi-bookmark-plus-fill"></i> EDIT PENULIS BUKU</p>
        <hr class="bg-white">
        <form action="/authors/{{ $author->id }}/edit" method="POST">
          @csrf
          <div class="mb-3">
            <label for="" class="form-label">Nama Penulis</label>
            <input type="text" name="name" id="" class="form-control" value="{{ $author->name }}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Nomor Telefon</label>
            <input type="text" name="phone" id="" class="form-control" value="{{ $author->phone }}">
          </div>
          <div class="d-flex justify-content-end">
            <button class="btn btn-success text-light" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection