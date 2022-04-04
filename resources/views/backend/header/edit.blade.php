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
                    <h4>Edit Header</h4>
                    <div class="section-header-button ml-auto">
                     <a href="{{ route('header.index')}}" class="btn btn-primary ">
                        <i class="fas fa-arrow-left"></i> Kembali</a>
                  </div>
                  </div>
                  <form action="{{ route('header.update' , $header->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                    <div class="card-body">
                          <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="title">Title</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="title" class="form-control" id="text" value="{{ $header->title }}">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="head">Head</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="head" class="form-control" id="text" value="{{ $header->head }}">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="desk">Desk</label>
                      <div class="col-sm-12 col-md-7">
                            <input type="text" name="desk" class="form-control" id="text" value="{{ $header->desk }}">
                      </div>
                    </div>

                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="gambar_header">Gambar</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="file" name="gambar_header" class="form-control">
                      <br>
                       <label  for="gambar">Gambar</label>
                      <img src="{{ asset('upload/' . $header->gambar_header) }}" width="500" >
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