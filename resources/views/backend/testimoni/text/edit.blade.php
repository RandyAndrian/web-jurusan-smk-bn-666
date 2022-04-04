@extends('layouts.default')

@section('title', 'Edit Text Testimoni')

@section('content')
   <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="section-header">
                    <h1>Edit Text Testimoni</h1>
                       <div class="section-header-button ml-auto">
                       <a href="{{ route('text_kontak.index')}}" class="btn btn-primary "> <i class="fas fa-arrow-left"></i> Kembali</a>
                     </div>
                  </div>
                  <form action="{{ route('text_testimoni.update', $text->id) }}" method="post">
                      @csrf
                      @method('PUT')
                    <div class="card-body">

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="link">Title</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="title" class="form-control" id="text" value="{{$text->title}}">
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