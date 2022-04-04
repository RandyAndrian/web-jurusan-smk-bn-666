@extends('layouts.default')

@section('title', 'Buat Iklan Berita')

@section('content')
   <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="section-header">
                    <h4>Buat Iklan Berita</h4>
                    <div class="section-header-button ml-auto">
                     <a href="{{ route('iklan.index')}}" class="btn btn-primary ">
                        <i class="fas fa-arrow-left"></i> Kembali</a>
                  </div>
                  </div>
                  <form action="{{ route('iklan.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                    <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="judul_iklan">Judul Iklan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="judul_iklan" class="form-control" id="text" >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="link">Link Iklan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="link" class="form-control" id="text" >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="gambar_iklan">Thumbnail Iklan</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="file" name="gambar_iklan" class="form-control">
                      </div>
                    </div>

                       <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="status">Status</label>
                      <div class="col-sm-12 col-md-7">
                        <select name="status" class="form-control">
                            <option value="1" >Active</option>
                            <option value="0">Draft</option>
                        </select>
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