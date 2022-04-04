  <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white shadow fixed-top">
            <div class="container px-3">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('frontend/assets/images/logo.png')}}" height="70" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto text-lg gap-lg-0 gap-2">
                        <li class="nav-item my-auto">
                            <a class="nav-link" aria-current="page"
                                href="{{ route('home')}}">Beranda</a>
                        </li>
                        <li class="nav-item dropdown my-auto">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kompentensi keahlian
        </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach ($kategori as $row)
                   <li><a class="dropdown-item" href="{{ route('profil-jurusan', $row->id)}}">{{ $row->nama_kategori}}</a></li>
              @endforeach
            </li>
            </ul>
                        <li class="nav-item my-auto">
                            <a class="nav-link" href="{{ route('port')}}">Portfolio</a>
                        </li>
                        <li class="nav-item my-auto">
                            <a class="nav-link" href="/berita">Berita</a>
                        </li>
                        <li class="nav-item my-auto me-lg-20">
                            <a class="nav-link" href="{{ route('gallery') }}">Galeri</a>
                        </li>
                        <li class="nav-item my-auto">
                            <a class="btn btn-log-in d-flex justify-content-center ms-lg-2 rounded-pill"
                                href="{{ route('login') }}" role="button">Masuk </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>