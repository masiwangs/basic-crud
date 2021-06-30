@extends('components.layout')

@section('content')
  <div class="container">
    <div class="card border-0 shadow-secondary">
      <div class="card-body">
        <p class="fw-bold"><i class="bi bi-cart-fill"></i> Daftar Buku</p>
        <hr>
        <div class="table-responsive">
          <table class="table table-hover table-borderless">
            <thead>
              <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Sinopsis</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($books as $book)
              <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->synopsis }}</td>
                <td class="d-flex flex-row">
                  <a href="/books/{{ $book->id }}" class="btn btn-primary text-light me-2 rounded shadow-primary btn-sm my-auto">Lihat</a>
                  <a href="/books/{{ $book->id }}/edit" class="btn btn-warning text-light me-2 rounded shadow-warning btn-sm my-auto">Edit</a>
                  <form action="/books/{{ $book->id }}/delete" class="my-auto" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger text-light btn-sm rounded shadow-danger">Hapus</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection