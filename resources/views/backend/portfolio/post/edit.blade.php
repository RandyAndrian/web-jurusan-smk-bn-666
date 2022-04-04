@extends('layouts.default')

@section('title', 'Edit Portfolio')

@section('content')
   <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="section-header">
                    <h4>Edit Halaman Jurusan </h4>
                    <div class="section-header-button ml-auto">
                     <a href="{{ route('jurusan.index')}}" class="btn btn-primary ">
                        <i class="fas fa-arrow-left"></i> Kembali</a>
                  </div>
                  </div>
                  <form action="{{ route('jurusan.update' , $jurusan->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                    <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="judul">Judul Portfolio</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="judul" class="form-control" id="text" value="{{ $portfolio->judul }}" >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="gambar_portfolio">Gambar</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="file" name="gambar_portfolio" class="form-control">
                      <br>
                       <label  for="gambar">Gambar</label>
                      <img src="{{ asset('upload/' . $portfolio->gambar_portfolio) }}" width="500" >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="kategori">Kategori</label>
                      <div class="col-sm-12 col-md-7">
                          <select name="kategori_portfolio_id" class="form-control">
                        @foreach ($kategori as $kat)
                        @if ($kat->id == $portfolio->kategori_portfolio_id)
                              <option value={{$kat->id }} selected='selected'>{{ $kat->nama_kategori}}</option>
                        @else
                           <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                        @endif

                        @endforeach
                           </select>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="deskripsi">Deskripsi</label>
                      <div class="col-sm-12 col-md-7">
                            <textarea name="deskripsi" class="summernote-simple">{{ $portfolio->deskripsi }}</textarea>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary btn-sm" type="submit">Kirim</button>
                        <button class="btn btn-danger btn-sm" type="reset">Reset</button>
                      </div>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </section>
            </div>
@endsection