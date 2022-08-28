@extends('layouts.main')

@section('section')

  <section class="agenda" id="agenda">
    <div class="container" data-aos="fade-up">
      <div class="row gy-4">
        <div class="col-12 text-center mb-5">
          <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="display-4">Agenda</h2>
                <p>Berikut ini merupakan jadwal kegiatan rutin atau agenda yang akan dilaksanakan oleh PERCASI JAWA TENGAH.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url({{ asset('img') }}/constructions-1.jpg);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Pemilihan Ketua PERCASI JATENG Periode 2021 - 2024</h4>
                    <ul>
                        <li><i class="bi bi-geo-alt"></i>Jl. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sit?</li>
                        <li><i class="bi bi-calendar-check"></i>Minggu, 20 Agustus 2022</li>
                        <li><i class="bi bi-clock"></i>10.00 WIB - Selesai</li>
                    </ul>
                    <a href="#" class="more">Join Now</a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url({{ asset('img') }}/constructions-2.jpg);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Rapat Akhir Tahun PERCASI JATENG 2022</h4>
                    <ul>
                        <li><i class="bi bi-geo-alt"></i>Jl. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sit?</li>
                        <li><i class="bi bi-calendar-check"></i>Minggu, 20 Agustus 2022</li>
                        <li><i class="bi bi-clock"></i>10.00 WIB - Selesai</li>
                    </ul>
                    <a href="#" class="more">Join Now</a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

      </div>
    </div>
</section>
    
@endsection