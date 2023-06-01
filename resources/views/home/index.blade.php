@extends('home.layouts.main')

@section('content')
<div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
  <div class="hero-section">
    <div class="container text-center wow zoomIn">
      <span class="subhead">Let's make your life happier</span>
      <h1 class="display-4">Hidup Sehat</h1>
      <a href="/login" class="btn btn-primary">MARI SEHAT</a>
    </div>
  </div>
</div>

<div class="bg-light">
  <div class="page-section py-3 mt-md-n5 custom-index">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-secondary text-white">
              <span class="mai-chatbubbles-outline"></span>
            </div>
            <p><span>Konsultasi</span> dengan dokter</p>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p><span>Perlindungan</span>Kesehatan</p>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-accent text-white">
              <span class="mai-basket"></span>
            </div>
            <p><span>Apotek</span>Kesehatan</p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .page-section -->

  <div class="page-section pb-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <h1>Selamat datang di Pusat Kesehatan <br> Anda</h1>
          <p class="text-grey mb-4">Go Sakit adalah sebuah platform kesehatan yang menyediakan konsultasi dengan dokter dan informasi seputar gaya hidup sehat. Mereka memiliki tim dokter berpengalaman yang siap memberikan konsultasi akurat dan solusi tepat untuk setiap masalah kesehatan yang dihadapi.
            <br>
            Mereka berkomitmen untuk memberikan pengalaman konsultasi yang terpercaya dan nyaman dengan mendengarkan dengan seksama dan merespon setiap pertanyaan atau kekhawatiran dengan kehangatan dan profesionalisme. Selain itu, Go Sakit juga menyediakan artikel dan panduan tentang tips dan strategi untuk gaya hidup sehat.
          </p>
          <a href="about.html" class="btn btn-primary">Selengkapnya</a>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
          <div class="img-place custom-img-1">
            <img src="{{ asset('assets/img/bg-doctor.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .bg-light -->
</div> <!-- .bg-light -->

<div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
  <div class="container py-5 py-lg-0">
    <div class="row align-items-center">
      <div class="col-lg-4 wow zoomIn">
        <div class="img-banner d-none d-lg-block">
          <img src="../assets/img/mobile_app.png" alt="">
        </div>
      </div>
      <div class="col-lg-8 wow fadeInRight">
        <h1 class="font-weight-normal mb-3">Dapatkan kemudahan akses semua fitur menggunakan Aplikasi Go Sakit</h1>
        <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
        <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
      </div>
    </div>
  </div>
</div> <!-- .banner-home -->

@endsection