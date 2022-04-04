@extends('layouts.default')

@section('title', 'Buat Halaman Jurusan')

@section('content')
   <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="section-header">
                    <h4>Buat Halaman Kompentensi Keahlian</h4>
                    <div class="section-header-button ml-auto">
                     <a href="{{ route('jurusan.index')}}" class="btn btn-primary ">
                        <i class="fas fa-arrow-left"></i> Kembali</a>
                  </div>
                  </div>
                  <form action="{{ route('jurusan.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                    <div class="card-body">

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="kategori">Kategori</label>
                      <div class="col-sm-12 col-md-7">
                    <select name="kategori_jurusan_id" class="form-control">
                        @foreach ($kategori as $kat)
                            <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                        @endforeach
                           </select>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="gambar_profil">Gambar</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="file" name="gambar_profil" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="desk">Desk</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea name="desk" class="summernote-simple"></textarea>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary btn-sm" type="submit">Kirim</button>

                      </div>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </section>
            </div>
@endsection