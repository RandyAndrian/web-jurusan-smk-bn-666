@extends('frontend.layouts.front')

@section('title', 'Beranda | Jurusan Smk Bakti Nusantara 666')

@section('content')
      <!--  Header -->
         <section class="header pt-lg-60 pb-50 pt-50">
       <div class="container mt-100">
            <div class="row gap-lg-0 gap-5">
                <div class="col-lg-6 col-12 my-auto">
                    <p class="text-support text-lg color-palette-2" data-aos="fade-right"> {{ $header->title}} </p>
                    <h class="header-title color-palette-1 fw-bold" data-aos="fade-right">{{ $header->head }} </h>
                    <p class="mt-30 mb-40 text-lg color-palette-1">{{ $header->desk }} </p>
                    <div class="d-flex flex-lg-row flex-column gap-4">
                        <a class="btn btn-get text-lg text-white rounded-pill" href="#jurusan"
                            role="button">Mulai Cari <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" width="25" height="25">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path
                                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                    fill="rgba(255,255,255,1)" /></svg></a>
                    </div>
                </div>
                <div class="col-lg-6 col-12 d-lg-block d-none">
                    <div class="d-flex justify-content-lg-end justify-content-center me-lg-5">
                        <div class="bg-hero-upload">
                            <img src="{{ asset('upload/' . $header->gambar_header )}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->
       <!-- Jurusan  -->
    <section id="jurusan" class="jurusan pt-50 pb-50">
        <div class="container">
            <h2 class="text-4xl  color-palette-1 text-center mt-30 mb-30"> Jurusan apa saja yang
                dimiliki ? </h2>
            <!-- 1 -->
            <div class="row">
                <h3 class="color-palette-1 text-2xl mt-50">Rekayasa Perangkat Lunak</h3>
                <div class="col-12 d-flex">
                    <div class="col-lg-6 col-md-8 me-3">
                        <div class="paragraf mt-3">
                            <p>Rekayasa Perangkat Lunak memberikan pengetahuan tentang prinsip dan
                                teknik untuk mendesain perangkat lunak yang tepat guna, tangguh, dan
                                mudah digunakan. Siswa akan mempelajari cara mendesain dan
                                menganalisis algoritma dan pemrograman menggunakan struktur data
                                yang efisien serta mengembangkan sistem operasi dan aplikasi
                                berbasis web/mobile.</p>
                        </div>
                        <div class="lihat mt-3"> <a href="#">  </a></div>
                    </div>
                    <div class="img-fluid ms-30 d-lg-block d-none "><img src="{{ asset('frontend/assets/images/profil1.png')}}"
                            alt=""></div>
                </div>
            </div>
            <!-- /1 -->
            <!-- 2 -->
            <div class="col d-flex">
                <div class="img-block d-lg-block d-none mt-100"><img src="{{ asset('frontend/assets/images/profil2.png')}}"
                        alt=""></div>
                <div class="col-lg-6 col-md-8 ">
                    <h3 class="color-palette-1 text-2xl mt-100 ms-50">Desain Komunikasi Visual</h3>
                    <div class="paragraf mt-3 ms-100 ms-50">
                        <p>Desain Komunikasi Visual (DKV) mempelajari ilmu tentang penyampaian pesan
                            (komunikasi) dengan menggunakan elemen-elemen visual atau rupa. Disini
                            kamu akan belajar untuk mengolah pesan secara informatif,komunikatif,
                            dan efektif, serta se-kreatif mungkin agar pesan dapat mencapai sasaran
                            dengan memperhatikan unsur bentuk, warna, tekstur, ruang, huruf, dan
                            segala hal yang berkaitan dengan visual (pengelihatan). </p>
                        <div class="lihat mt-3"> <a href="#">  </a></div>
                    </div>
                </div>
            </div>
            <!-- /2 -->
            <!-- 3 -->
            <h3 class="color-palette-1 text-2xl mt-100">Animasi</h3>
            <div class="col-12 d-flex">
                <div class="col-lg-6 col-md-8 me-3">
                    <div class="paragraf mt-3">
                        <p>Animasi akan mempelajari teknik menampilkan gambar berurut sedemikian
                            rupa sehingga penonton merasakan adanya ilusi gerakan (motion) pada
                            gambar yang ditampilkan. Lebih lengkapnya, disini kamu akan belajar
                            membuat karakter dwimatra (2D), karakter trimatra (3D), membuat special
                            effects, membuat story board, dan menulis skenarionya.</p>
                    </div>
                    <div class="lihat mt-3"> <a href="#">  </a></div>
                </div>
                <div class="img-fluid ms-30 d-lg-block d-none"><img src="{{ asset('frontend/assets/images/profil3.png')}}"
                        alt=""></div>
            </div>
            <!-- /3 -->
            <!-- 4 -->
            <div class="col-12 d-flex">
                <div class="img-fluid d-lg-block d-none  mt-100"><img src="{{asset('frontend/assets/images/profil4.png')}}"
                        ></div>
                <div class="col-lg-6 col-md-9">
                    <h3 class="color-palette-1 text-2xl mt-100 ms-50">Akuntansi Keuangan Lembanga
                    </h3>
                    <div class="paragraf mt-3 ms-100 ms-50">
                        <p>Akuntansi akan mempelajari akuntansi dan keuangan, ditambah dengan
                            pengetahuan untuk merancang, mengoperasikan, dan mengembangkan software
                            yang dapat digunakan untuk persiapan dan presentasi laporan keuangan,
                            mengevaluasi proses bisnis, perekaman transaksi, dan lain-lain.
                            Pemrograman akuntansi ini ditujukan untuk membantu menyelesaikan
                            pekerjaan akuntansi dengan lebih efektif dan efisien. </p>
                        <div class="lihat mt-3"> <a href="#">  </a></div>
                    </div>
                </div>
            </div>
            <!-- /4 -->
            <!-- 5 -->
            <h3 class="color-palette-1 text-2xl mt-100">Bisnis Daring dan Pemasaran</h3>
            <div class="col-12 d-flex">
                <div class="col-lg-6 col-md-8 me-3">
                    <div class="paragraf mt-3">
                        <p>Bisnis Daring dan Pemasaran mempelajari dasar – dasar kemampuan dan
                            keilmuan menjadi seorang marketing baik marketing secara konvensional
                            maupun melalui media daring (online/internet). Di Kompetensi Keahlian
                            Bisnis Daring dan Pemasaran siswa akan mempelajari strategi pasar,
                            kewirausahaan dan membaca peluang di dunia bisnis..</p>
                    </div>
                    <div class="lihat mt-3"> <a href="#"></a></div>
                </div>
                <div class="img-fluid ms-30 d-lg-block d-none"><img src="{{ asset('frontend/assets/images/profil5.png')}}"
                        alt=""></div>
            </div>
        </div>
        <!-- /5 -->
        </div>
        </div>
    </section>
    <!-- End Jurusan -->
    <!-- Testimoni -->
    <section class="testimoni mt-100 ">
        <div class="container">
            <h2 class="text-4xl  color-palette-1 text-center mt-30 mb-30">{{$TextTestimoni->title}} </h2>
            <div class="row testimoni pt-50 pb-50">
                @foreach ($testimoni as $row)
                 <div class="col-lg-4 col-12">
                    <div class="item-pricing">
                        <img src="{{ asset('upload/' . $row->gambar_testimoni)}}" height="80" width="80" style="border-radius: 80px" >
                        <h2 class="name">{{ $row->name }}</h2>
                        <p class="role">{{ $row->role }}</p>
                        <p class="review"> {!! $row->desk !!} </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Testimoni -->
    <!-- Kontak -->
    <section class="kontak">
         <h2 class="text-4xl  color-palette-1 text-center mt-30 mb-30">{{ $TextKontak->title }} </h2>
        <p class="text-center ">{{ $TextKontak->desk }}</p>
        <div class="container justify-content-center text-center">
            <a href="{{ $kontak->link }}" class="btn btn-call text-white rounded-pill" role="button">Hubungi Kami</a>
        </div>
    </section>
    <!-- Kontak -->

@endsection