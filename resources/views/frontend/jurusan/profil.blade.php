@extends('frontend.layouts.front')

@section('title', 'Kompentensi Keahlian | Jurusan Smk Bakti Nusantara 666')

@section('content')
     <div class="container mt-100">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8">
          <h2 class="mb-3 mt-3 ">{{ $jurusan->kategori_jurusan->nama_kategori }}</h2>

          <img src="{{ asset('upload/' . $jurusan->gambar_profil)}}" alt="" class="img-fluid">

          <article class="my-3">{!! $jurusan->desk !!}</article>

        </div>
      </div>
    </div>
@endsection