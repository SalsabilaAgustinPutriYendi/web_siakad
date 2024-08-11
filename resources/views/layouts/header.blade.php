<header>

    {{-- <nav class="navbar">
        <h1 class="title">Teknologi Informasi</h1>
        <ul class="nav-item">
            <li class="item">
                <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="item">
                <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
            </li>
            <li class="item">
                <a class="nav-link" href="/prodi">Prodi</a>
            </li>
            <li class="item">
                <a class="nav-link" href="/user">User</a>
            </li>
        </ul>
        <div class="action">
            <form action="/logon"></form>
        </div>
    </nav> --}}




    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Teknologi Informasi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/dosen">Dosen</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/prodi">Prodi</a>
              </li>

            <li class="nav-item">
                <a class="nav-link" href="/user">User</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/matakuliah">Matakuliah</a>
            </li>
          </ul>

          {{-- method dibawah ini boleh dibikin/tidak --}}
          <form class="d-flex" role="search" action="/mahasiswa" method="get">
            <input class="form-control me-2" name="search" type="search" placeholder="Search"
            aria-label="Search" value="{{ request('search') }}" >
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>


        <ul class="navbar-nav">
            <li class="nav-item px-3">
                <form action="/login" method="get">
                @csrf
                <button class="nav-link" type="submit">Login</button>
                </form>
            </li>
        </ul>

        </div>
      </div>
    </nav>
  </header>
