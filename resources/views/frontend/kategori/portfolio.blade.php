@extends('frontend.layouts.front')

@section('title', 'Portfolio | Jurusan Smk Bakti Nusantara 666')

@section('content')
      <section class="portofolio pt-100">
        <h2 class="text-center justify-content-center">Karya terbaik Siswa smk bakti nusantara 666
        </h2>
        <div class="container">
            <div class="row mt-30">
                <div class="col-12">
                    <div class="wrapper justify-content-center">
                    <ul class="indicator">
                      @foreach ($kategori as $row)
                      <a  class="btn-custom-2"  href="{{ route('kategori-portfolio', $row->id )}}">{{ $row->nama_kategori}}</a>
                      @endforeach
                    <ul>
                </div>
            </div>
        </div>
            <div class="row pt-10">
              @foreach ($portfolio as $row)
                  <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div class="fp-card" >
                    <div class="img">
                        <a href="{{ route('detail-portfolio', $row->slug )}}" ><img src="{{ asset('upload/' . $row->gambar_portfolio)}}" width="100%" alt=""></a>
                    </div>
                    <div class="user mt-2 d-flex justify-content-between">
                        <div class="d-flex">
                           <a href="{{ route('detail-portfolio', $row->slug )}}" ><img src="{{ asset('frontend/assets/images/user-1.png')}}" width="100%" alt=""></a>
                            <p class="ms-1 ">{{ $row->users->name }}</p>
                        </div>
                </div>
            </div>
        </div>
              @endforeach
            </div>
             <div class="mt-3">
                {{ $portfolio->links() }}
            </div>
          </section>
@endsection