@extends('layouts.main')

@section('section')

<!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-5">
          <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="display-4">Galeri</h2>
                <p>Berikut ini merupakan dokumentasi kegiatan yang telah sukses diselenggarakan oleh PERCASI JAWA TENGAH</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row gy-4 justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img') }}/gallery/gallery-1.jpg" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img') }}/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            </div>
          </div>
        </div><!-- End Gallery Item -->
        <div class="col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img') }}/gallery/gallery-2.jpg" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img') }}/gallery/gallery-2.jpg" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            </div>
          </div>
        </div><!-- End Gallery Item -->
        <div class="col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img') }}/gallery/gallery-3.jpg" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img') }}/gallery/gallery-3.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            </div>
          </div>
        </div><!-- End Gallery Item -->
        <div class="col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img') }}/gallery/gallery-4.jpg" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img') }}/gallery/gallery-4.jpg" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            </div>
          </div>
        </div><!-- End Gallery Item -->
        <div class="col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img') }}/gallery/gallery-5.jpg" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img') }}/gallery/gallery-5.jpg" title="Gallery 5" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            </div>
          </div>
        </div><!-- End Gallery Item -->
        <div class="col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img') }}/gallery/gallery-6.jpg" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img') }}/gallery/gallery-6.jpg" title="Gallery 6" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            </div>
          </div>
        </div><!-- End Gallery Item -->
        <div class="col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img') }}/gallery/gallery-7.jpg" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img') }}/gallery/gallery-7.jpg" title="Gallery 7" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            </div>
          </div>
        </div><!-- End Gallery Item -->
        <div class="col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img') }}/gallery/gallery-8.jpg" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img') }}/gallery/gallery-8.jpg" title="Gallery 8" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            </div>
          </div>
        </div><!-- End Gallery Item -->
        <div class="col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img') }}/gallery/gallery-9.jpg" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img') }}/gallery/gallery-9.jpg" title="Gallery 9" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            </div>
          </div>
        </div><!-- End Gallery Item -->

      </div>

    </div>
  </section><!-- End Gallery Section -->
    
@endsection