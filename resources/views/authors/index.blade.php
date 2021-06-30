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
                <th>ID Author</th>
                <th>Nama Author</th>
                <th>Telefon Author</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($authors as $author)
              <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->name }}</td>
                <td>{{ $author->phone }}</td>
                <td class="d-flex flex-row">
                  <a href="/authors/{{ $author->id }}" class="btn btn-primary text-light me-2 rounded shadow-primary btn-sm my-auto">Lihat</a>
                  <a href="/authors/{{ $author->id }}/edit" class="btn btn-warning text-light me-2 rounded shadow-warning btn-sm my-auto">Edit</a>
                  <form action="/authors/{{ $author->id }}/delete" class="my-auto" method="post">
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