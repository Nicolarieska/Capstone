@extends('user.layouts.mainregister')

@section('content')
<!--Jumbotron-->
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
  <div class="banner-section">
    <div class="container text-center wow fadeInUp">
      <nav aria-label="Breadcrumb">
        <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
          <li class="breadcrumb-item"><a href="/homeuser">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Poli</li>
        </ol>
      </nav>
      <h1 class="font-weight-normal">Daftar Poli</h1>
    </div> <!-- .container -->
  </div> <!-- .banner-section -->
</div>



<div class="page-section bg-light">

  <div class="title-container wow zoomIn">
    <h1 class="page-title">Daftar Poli Kami</h1>
  </div>

  <div class="card-poli-container">

    @foreach($poli as $p)
    <a href="/registerdoctors" class="wow zoomIn">
      <div class="card-poli">
        <div class="header">
          <img src="{{ asset($p->photo) }}" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;" alt="Gambar Poli">
        </div>
      </div>
      <div class="body">
        <p class="text-xl mb-0">{{ $p->name }}</p>
      </div>
    </a>

    @endforeach

  </div>

</div>
@endsection