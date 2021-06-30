<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container">
    <a class="navbar-brand" href="/">
      <p class="mb-0 fw-bold text-primary">Book<span class="fw-light">Library</span></p>
      <p class="mb-0 text-end text-muted" style="font-size:.6rem; transform:translate(-8px, -9px)">BasicCRUD</p>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/">Halaman depan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/books">Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/authors">Penulis</a>
        </li>
      </ul>
      <form action="/books" method="GET" class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Cari judul buku..." aria-label="Search" name="name">
        <button class="btn btn-primary text-light rounded shadow-primary" type="submit">Cari</button>
      </form>
    </div>
  </div>
</nav>