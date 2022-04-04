@extends('layouts.default')

@section('title', 'Edit Galeri')

@section('content')
   <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="section-header">
                    <h4>Edit Galeri </h4>
                    <div class="section-header-button ml-auto">
                     <a href="{{ route('galeri.index')}}" class="btn btn-primary ">
                        <i class="fas fa-arrow-left"></i> Kembali</a>
                  </div>
                  </div>
                  <form action="{{ route('galeri.update' , $galeri->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="gambar_galeri">Gambar galeri</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="file" name="gambar_galeri" class="form-control">
                      <br>
                       <label  for="gambar">Gambar galeri</label>
                      <img src="{{ asset('upload/' . $galeri->gambar_galeri) }}" width="500" >
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