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
                    <p class="text-grey mb-4 about-text">Go Sakit adalah sebuah platform kesehatan yang menyediakan konsultasi dengan dokter dan informasi seputar gaya hidup sehat. Mereka memiliki tim dokter berpengalaman yang siap memberikan konsultasi akurat dan solusi tepat untuk setiap masalah kesehatan yang dihadapi.
                    <br><br>
                    Mereka berkomitmen untuk memberikan pengalaman konsultasi yang terpercaya dan nyaman dengan mendengarkan dengan seksama dan merespon setiap pertanyaan atau kekhawatiran dengan kehangatan dan profesionalisme. Selain itu, Go Sakit juga menyediakan artikel dan panduan tentang tips dan strategi untuk gaya hidup sehat.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection