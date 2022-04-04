@extends('layouts.default')

@section('title', 'Edit Testimoni')

@section('content')
   <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="section-header">
                    <h4>Edit Testimoni</h4>
                    <div class="section-header-button ml-auto">
                     <a href="{{ route('testimoni.index')}}" class="btn btn-primary ">
                        <i class="fas fa-arrow-left"></i> Kembali</a>
                  </div>
                  </div>
                  <form action="{{ route('testimoni.update' , $testimoni->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                    <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="gambar_testimoni">Avatar</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="file" name="gambar_testimoni" class="form-control">
                      <br>
                       <label  for="gambar">Gambar</label>
                      <img src="{{ asset('upload/' . $testimoni->gambar_testimoni) }}" width="500" >
                      </div>
                    </div>

                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="name" class="form-control" id="text" value="{{ $testimoni->name }}" >
                      </div>
                    </div>

                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="role">Pekerjaan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="role" class="form-control" id="text" value="{{ $testimoni->role }}" >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="desk">Deskripsi</label>
                      <div class="col-sm-12 col-md-7">
                            <textarea name="desk" class="summernote-simple">{{ $testimoni->desk }}</textarea>
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