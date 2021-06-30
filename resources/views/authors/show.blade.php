@extends('components.layout')

@section('content')
  <div class="container">
    <div class="card border-0 shadow-secondary">
      <div class="card-body">
        <p class="fw-bold"><i class="bi bi-person-fill"></i> {{ $author->name }} <span class="fw-normal">({{$author->phone}})</span></p>
        <hr>
        <p class="fw-bold mb-0"><i class="bi bi-journal"></i> Buku yang ditulis</p>
        <div class="row">
          <div class="col-md-24">
            <table class="table table-hover table-borderless">
              <thead>
                <tr>
                  <th>Judul buku</th>
                  <th>Synopsis</th>
                  <th>Tags</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($author->books as $book)
                <tr>
                  <td>{{ $book->name }}</td>
                  <td>{{ $book->synopsis }}</td>
                  <td>
                    @foreach (json_decode($book->tags) as $tag)
                    <span class="badge bg-secondary">{{ $tag }}</span>
                    @endforeach
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection