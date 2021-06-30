@extends('components.layout')

@section('content')
  <div class="container">
    <div class="card border-0 shadow-secondary">
      <div class="card-body">
        <p class="fw-bold"><i class="bi bi-person-fill"></i> {{ $book->name }}</p>
        <hr>
        <div class="row mb-3">
          <div class="col-md-5 fw-bold">Penulis</div>
          <div class="col-md-19">
            <a href="/authors/{{ $book->author_id }}">{{ $book->author->name }}</a>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-5 fw-bold">Synopsis</div>
          <div class="col-md-19">{{ $book->synopsis }}</div>
        </div>
        <div class="row mb-3">
          <div class="col-md-5 fw-bold">Kategori</div>
          <div class="col-md-19">
            @foreach (json_decode($book->tags) as $tag)
            <span class="badge bg-secondary">{{ $tag }}</span>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection