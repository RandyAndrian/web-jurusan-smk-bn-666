@extends('layouts.default')

@section('title', 'Edit Kategori Portfolio')

@section('content')
   <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="section-header">
                    <h1>Edit Kategori Portfolio</h1>
                       <div class="section-header-button ml-auto">
                       <a href="{{ route('kategori_portfolio.index')}}" class="btn btn-primary "> <i class="fas fa-arrow-left"></i> Kembali</a>
                     </div>
                  </div>
                  <form action="{{ route('kategori_portfolio.update', $kategori_portfolio->id) }}" method="post">
                      @csrf
                      @method('PUT')
                    <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="kategori">Nama kategori</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="nama_kategori" value="{{ $kategori_portfolio->nama_kategori }}" class="form-control" id="text" >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary" type="submit">Kirim</button>
                      </div>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </section>
            </div>
@endsection