    <section class="footer mt-100">
            <footer>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 text-lg-start text-center">
                            <a href="#" class="mb-30 mt-50">
                                <img src="{{ asset('frontend/assets/images/logo.png')}}" alt="">
                            </a>
                            <p class="mt-10 text-lg color-palette-1 mb-30 fw-normal">Smk Bakti
                                Nusantara 666 <br> Jl.Raya Percobaan No 65.Cileunyi <br> Kab.Bandung
                                Jawa barat 40622 </p>

                        </div>
                        <div class="col-lg-8 mt-lg-0 mt-20">
                            <div class="row gap-sm-0">
                                <div class="col-md-4 col-6 mb-lg-0 mb-25">
                                    <p class="text-lg kata-kunci color-palette-1 mb-12">Kata Kunci
                                    </p>
                                    <div class="garis"></div>
                                    <ul class="list-unstyled">
                                        <li class="mb-6">
                                            <a href="{{ route('port')}}"
                                                class="text-lg color-palette-1 text-decoration-none">Portfolio</a>
                                        </li>
                                        <li class="mb-6">
                                            <a href="{{ route('gallery') }}"
                                                class="text-lg color-palette-1 text-decoration-none">Galeri</a>
                                        </li>
                                        <li class="mb-6">
                                            <a href="/berita"
                                                class="text-lg color-palette-1 text-decoration-none">Berita</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-6 mb-lg-0 mb-25">
                                    <p class="text-lg kata-kunci color-palette-1 mb-12">Kontak</p>
                                    <div class="garis"></div>
                                    <ul class="list-unstyled">
                                        @foreach ($social as $row)
                                        <li class="mb-6">
                                            <a href="{{ $row->link}}"
                                                class="text-lg color-palette-1 text-decoration-none">
                                                {{$row->kontak}}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-md-4 col-12 mt-lg-0 mt-md-0 mt-25">
                                    <p class="text-lg kata-kunci color-palette-1 mb-12">Kompentensi keahlian</p>
                                    <div class="garis"></div>
                                    <ul class="list-unstyled">
                                        @foreach ($kategori as $row)
                                        <li class="mb-6">
                                            <a href="{{ route('profil-jurusan', $row->id)}}"
                                                class="text-lg color-palette-1 text-decoration-none">
                                                {{ $row->nama_kategori }}</a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </section>