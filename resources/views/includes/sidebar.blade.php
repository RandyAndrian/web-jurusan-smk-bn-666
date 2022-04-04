<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Admin Jurusan Bn 666</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">AJB</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item active">
                <a href="{{ route('dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="menu-header">Fitur</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Berita</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('kategori.index')}}">Kategori</a></li>
                  <li><a class="nav-link" href="{{ route('artikel.index')}}">Posting berita</a></li>
                  <li><a class="nav-link" href="{{ route('iklan.index')}}">Posting iklan berita</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Galeri</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('galeri.index')}}">Posting galeri</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Portfolio</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('kategori_portfolio.index')}}">Kategori</a></li>
                  <li><a class="nav-link" href="{{ route('portfolio.index')}}">Posting portfolio</a></li>
                </ul>
              </li>

              @if (Auth::user()->is_admin == 1)
                   <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Kompentensi keahlian</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('kategori_jurusan.index')}}">Kategori</a></li>
                  <li><a class="nav-link" href="{{ route('jurusan.index')}}">Posting jurusan</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Social media</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="#">Title Sosial media</a></li>
                  <li><a class="nav-link" href="{{ route('social.index')}}">Post</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Kontak</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('text_kontak.index')}}">Text kontak</a></li>
                  <li><a class="nav-link" href="{{ route('kontak.index')}}">Post</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Testimoni</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('text_testimoni.index')}}">Text testimoni</a></li>
                  <li><a class="nav-link" href="{{ route('testimoni.index')}}">Post</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Header</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('header.index')}}">Post</a></li>
                </ul>
              </li>
              @endif


        </aside>
      </div>
