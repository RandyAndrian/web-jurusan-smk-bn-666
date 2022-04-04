@extends('layouts.default')

@section('title', 'Buat Testimoni')

@section('content')
   <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="section-header">
                    <h4>Buat Testimoni</h4>
                    <div class="section-header-button ml-auto">
                     <a href="{{ route('testimoni.index')}}" class="btn btn-primary ">
                        <i class="fas fa-arrow-left"></i> Kembali</a>
                  </div>
                  </div>
                  <form action="{{ route('testimoni.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                    <div class="card-body">

                       <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="gambar_testimoni">Avatar</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="file" name="gambar_testimoni" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="name" class="form-control" id="text" >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Role</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="role" class="form-control" id="text" >
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