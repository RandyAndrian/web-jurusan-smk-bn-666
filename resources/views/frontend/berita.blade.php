@extends('frontend.layouts.front')

@section('title', 'Berita | Jurusan Smk Bakti Nusantara 666')

@section('content')
      <section class="berita pt-100">
        <h2 class="text-center justify-content-center">Berita seputar jurusan smk bakti nusantara
            666
            </h2>
        <div class="container mt-5 mb-5">
        <div class="row g-3">
            @forelse ($berita as $row)
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="{{ route('kategori-berita', $row->kategori)}}" class="text-white text-decoration-none">{{ $row->kategori->nama_kategori }}</a></div>
                    <a href="{{ route('detail-artikel', $row->slug )}}"><img src="{{ asset('upload/' . $row->gambar_artikel) }}"
                    alt="{{ $row->kategori->name }}" class="card-img-top"></a>
                    <div class="card-body">
                        <h5 class="card-tittle">{{ $row->judul }}</h5>
                        <p>
                            <small>
                                By.<a href="#">{{ $row->users->name}}</a> {{ $row->created_at->diffForHumans() }}
                             </small>
                        </p>
                        <p class="card-text">{!! Str::limit($row->deskripsi, 100) !!}</p>
                         <div class="lihat-2"> <a href="{{ route('detail-artikel', $row->slug )}}"> Lihat Selengkapnya <svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    width="25" height="25">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                        fill="rgba(17,71,90,1)" /></svg></a></div>
                    </div>
                </div>
            </div>
            @empty
            <p>Data masih kosong</p>
            @endforelse
        </div>
     <div class="mt-3">
                      {{ $berita->links() }}
            </div>
    </div>
    </section>
@endsection