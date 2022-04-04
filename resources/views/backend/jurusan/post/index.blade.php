@extends('layouts.default')

@section('title', 'Data Halaman Jurusan')

@section('content')
       <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="section-header">
                    <h1>Halaman Jurusan</h1>
                    <div class="section-header-button ml-auto">
                  <a href="{{ route('jurusan.create') }}" class="btn btn-primary "><i class="fas fa-plus"></i>  Tambah </a>
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
                            <th>Nama Jurusan</th>
                            <th>Desk</th>
                            <th>Gambar</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($jurusan as $row)
                              <tr>
                              <td>{!! Str::limit($row->kategori_jurusan->nama_kategori, 10) !!}</td>
                              <td>{!! Str::limit($row->desk, 10) !!}</td>
                              <td><img src="{{ asset('upload/' . $row->gambar_profil) }}" width="100"></td></td>
                              <td><a href="{{ route('jurusan.edit', $row->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>
                                <form action="{{ route('jurusan.destroy', $row->id) }}" method="POST" class="d-inline">
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