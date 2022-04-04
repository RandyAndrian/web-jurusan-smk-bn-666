@extends('layouts.default')

@section('title', 'Edit Header')

@section('content')
   <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="section-header">
                    <h4>Edit Halaman Jurusan</h4>
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
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="title">Title</label>
                      <div class="col-sm-12 col-md-7">
                    <select name="kategori_jurusan_id" class="form-control">
                        @foreach ($kategori as $kat)
                        @if ($kat->id == $jurusan->kategori_jurusan_id)
                              <option value={{$kat->id }} selected='selected'>{{ $kat->nama_kategori}}</option>
                        @else
                           <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                        @endif
                        @endforeach
                           </select>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="gambar_header">Gambar</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="file" name="gambar_profil" class="form-control" >
                         <br>
                       <label  for="gambar">Gambar</label>
                      <img src="{{ asset('upload/' . $jurusan->gambar_profil) }}" width="500" >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="desk">Desk</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea name="desk" class="summernote-simple">{{ $jurusan->desk }}</textarea>
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