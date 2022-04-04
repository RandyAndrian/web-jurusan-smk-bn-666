@extends('frontend.layouts.front')

@section('title', 'Galeri | Jurusan Smk Bakti Nusantara 666')

@section('content')
     <section class="gallery pt-100">
          <h2 class="text-center justify-content-center mt-30">Dokumentasi kegiatan yang ada di smk bakti nusantara 666
        </h2>
     <div class="container-lg">
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 mt-20">
            @forelse ($galeri as $row)
             <div class="col">
              <img src="{{ asset('upload/' . $row->gambar_galeri) }}" class="gallery-item" alt="gallery">
           </div>
            @empty
           <p>Data masih kosong</p>
            @endforelse



        </div>
       <div class="mt-3">
                      {{ $galeri->links() }}
            </div>
     </div>
  </section>

<!-- Modal -->
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <img src="img/1.jpg" class="modal-img" alt="modal img">
      </div>
    </div>
  </div>
</div>

@endsection