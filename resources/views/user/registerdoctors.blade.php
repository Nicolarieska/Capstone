@extends('user.layouts.main')

@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
  <div class="banner-section">
    <div class="container text-center wow fadeInUp">
      <nav aria-label="Breadcrumb">
        <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
          <li class="breadcrumb-item"><a href="/homeuser">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dokter</li>
        </ol>
      </nav>
      <h1 class="font-weight-normal">Daftar Dokter</h1>
    </div> <!-- .container -->
  </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="page-section bg-light">

  <div class="title-container wow zoomIn">
    <h1 class="page-title">Daftar Dokter Kami</h1>
  </div>


  <div class="doctor-container-out">

    <div class="doctor-container">

      <a href="/jadwal">
        <div class="wow zoomIn">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/doctor_1.jpg" alt="">
            </div>
            <div class="body">
              <div class="text">
                <p class="text-xl mb-0">Dr. Stein Albert</p>
                <span class="text-sm text-grey">Poli Gigi</span>

                <div class="items">
                  <div class="rating">
                    &#9733; <p>84%</p>
                  </div>
                  <div class="exp">
                    &#128195; <p>35 Tahun</p>
                  </div>
                </div>

                <div class="harga">
                  <p>Bayar di rumah sakit</p>
                  <h4>Rp 500.000</h4>
                </div>
              </div>

              <div class="btn-pesan">
                Buat janji
              </div>
            </div>
          </div>
        </div>
      </a>

    </div>

  </div>
</div>
@endsection