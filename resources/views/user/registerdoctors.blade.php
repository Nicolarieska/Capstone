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
      @foreach ($doctor as $d)
      <a href="/jadwal/{{ $d->id }}">
        <div class="wow zoomIn">
          <div class="card-doctor">
            <div class="header">
              <img src="{{ asset($d->photo) }}" alt="">
            </div>
            <div class="body">
              <div class="text">
                <p class="text-xl mb-0">{{ $d->name }}</p>

                @foreach ($poli as $p)
                @if ($p->id == $d->poli_id)
                <span class="text-sm text-grey">{{ $p->name }}</span>
                @endif
                @endforeach

                <div class="items">
                  <div class="rating">
                    &#9733; <p>{{ $d->gender }}</p>
                  </div>
                  <div class="exp">
                    &#128195; <p>Magang</p>
                  </div>
                </div>
                <div class="btn-pesan">
                    Buat janji
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>

  </div>
</div>
@endsection