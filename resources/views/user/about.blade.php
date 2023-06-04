@extends('user.layouts.main')

@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="/homeuser">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Tentang Kami</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="page-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 py-3 wow zoomIn">
                <div class="card-service">
                    <div class="circle-shape bg-secondary text-white">
                        <span class="mai-chatbubbles-outline"></span>
                    </div>
                    <p>Konsultasi dengan dokter</p>
                </div>
            </div>
            <div class="col-md-4 py-3 wow zoomIn">
                <div class="card-service">
                    <div class="circle-shape bg-primary text-white">
                        <span class="mai-shield-checkmark"></span>
                    </div>
                    <p>Perlindungan Kesehatan</p>
                </div>
            </div>
            <div class="col-md-4 py-3 wow zoomIn">
                <div class="card-service">
                    <div class="circle-shape bg-accent text-white">
                        <span class="mai-basket"></span>
                    </div>
                    <p>Apotek Kesehatan</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp">
                <h1 class="text-center mb-3">Selamat Datang Di Go Sakit</h1>
                <div class="text-lg">
                    <p>Mereka memiliki tim dokter yang berpengalaman yang siap memberikan konsultasi dan solusi yang tepat untuk masalah kesehatan Anda. Mereka berkomitmen untuk memberikan pengalaman konsultasi yang terpercaya dan nyaman, dengan mendengarkan dengan seksama dan merespon setiap pertanyaan atau kekhawatiran Anda dengan hangat dan profesional.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection