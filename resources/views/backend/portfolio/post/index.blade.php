@extends('layouts.default')

@section('title', 'Data Portfolio')

@section('content')
       <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="section-header">
                    <h1>Data Portfolio</h1>
                    <div class="section-header-button ml-auto">
                  <a href="{{ route('portfolio.create')}}" class="btn btn-primary "><i class="fas fa-plus"></i>  Tambah Portfolio</a>
                  </div>
                  </div>
                  <div class="card-body">
                      @if (Session::has('success'))
                      <div class="alert alert-success">
                          {{ Session('success') }}
                      </div>
                    @endif
                    <div class="table-responsive">
                      <table class="table table-bordered" id="table-1">
                        <thead>
                          <tr>
                            <th>Judul</th>
                            <th>Slug</th>
                            <th>Kategori</th>
                            <th>Author</th>
                            <th>Gambar</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($portfolio as $row)
                              <tr>
                              <td>{{ $row->judul }}</td>
                              <td>{{ $row->slug}}</td>
                              <td>{{ $row->kategori_portfolio->nama_kategori }}</td>
                              <td>{{ $row->users->name}}</td>
                              <td>  <img src="{{ asset('upload/' . $row->gambar_portfolio) }}" width="100"></td>
                              <td><a href="{{ route('portfolio.edit', $row->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>
                                <form action="{{ route('portfolio.destroy', $row->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm mr-2">
                                  <i class="fas fa-trash"></i>
                                </button>
                              </form>
                              </td>
                            </tr>
                            @empty
                              <tr>
                                <td colspan="6" class="text-center">Data Masih Kosong</td>
                              </tr>
                            @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection