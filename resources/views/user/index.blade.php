@extends('user.layouts.main')

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
                        <p>Konsultasi dengan dokter</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-primary text-white">
                            <span class="mai-shield-checkmark"></span>
                        </div>
                        <p>Perlindungan Kesehatan</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-accent text-white">
                            <span class="mai-basket"></span>
                        </div>
                        <p>Apotek Kesehatan</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1>Selamat datang di Pusat Kesehatan Anda</h1>
                    <p>Mereka memiliki tim dokter yang berpengalaman yang siap memberikan konsultasi dan solusi yang tepat untuk masalah kesehatan Anda. Mereka berkomitmen untuk memberikan pengalaman konsultasi yang terpercaya dan nyaman, dengan mendengarkan dengan seksama dan merespon setiap pertanyaan atau kekhawatiran Anda dengan hangat dan profesional.</p>
                    <a href="/about" class="btn btn-primary">Selengkapnya</a>
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
@endsection