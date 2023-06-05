@extends('user.layouts.main')

@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
  <div class="banner-section">
    <div class="container text-center wow fadeInUp">
      <nav aria-label="Breadcrumb">
        <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
          <li class="breadcrumb-item"><a href="/homeuser">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Poli</li>
        </ol>
      </nav>
      <h1 class="font-weight-normal">Poli Gigi</h1>
    </div> <!-- .container -->
  </div> <!-- .banner-section -->
</div>

<div class="container-biodata"> 
    <img class="detail-thumb" src="../assets/img/doctors/doctor_1.jpg" alt="">
    <div class="detail-content">
        <h1 tabindex="0" class="list-detail-title" id="doctor-name">Dr. Stein Albert</h1>
        <div class="detail-container-subtitel">
            <h3 tabindex="0" class="doctor-poli" id="doctor-poli">Poli Gigi</h3>
            <div class="items">
                <div class="rating">
                &#9733; <p id="rating">84%</p>
                </div>
                <div class="exp">
                &#128195; <p id="exp">35 Tahun</p>
                </div>
            </div>
        </div>
        <div class="detail-desc">
            <h4 tabindex="0">Description:</h4>
            <p id="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
        </div>
    </div>
</div>

<div class="time-container">
    <div class="pilih-jadwal">
        <div class="time-title">
            <h1>Pilih Waktu Kunjungan</h1>
        </div>
    
        <div class="button-container">
            <button class="jadwal">
                <div class="hari">
                    Senin
                </div>
                <div class="tanggal">
                    5 Juni
                </div>
            </button>
            <button class="jadwal">
                <div class="hari">
                    Senin
                </div>
                <div class="tanggal">
                    5 Juni
                </div>
            </button>
            <button class="jadwal">
                <div class="hari">
                    Senin
                </div>
                <div class="tanggal">
                    5 Juni
                </div>
            </button>
        </div>
    </div>
</div>
@endsection