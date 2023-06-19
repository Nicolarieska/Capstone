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
            @foreach ($poli as $p)
            @if ($p->id == $doctor->poli_id)
            <h1 tabindex="0" class="font-weight-normal">{{ $p->name }}</h1>
            @endif
            @endforeach
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div>

<main>
    <section>
        <div class="subtitle wow zoomIn">
            <h1 class="subtitle-text" tabindex="0">Biodata Dokter</h1>
        </div>

        <div class="container-biodata wow zoomIn">
            <img class="detail-thumb" src="{{ asset($doctor->photo) }}" alt="">
            <div class="detail-content">
                <h1 tabindex="0" class="list-detail-title" id="doctor-name">{{ $doctor->name }}</h1>
                <div class="detail-container-subtitel">
                    @foreach ($poli as $p)
                    @if ($p->id == $doctor->poli_id)
                    <h3 tabindex="0" class="doctor-poli" id="doctor-poli">{{ $p->name }}</h3>
                    @endif
                    @endforeach
                    <div class="items">
                        <div class="rating">
                            &#9733; <p id="rating">{{ $doctor->gender }}</p>
                        </div>
                        <div class="exp">
                            &#128195; <p id="exp">Magang</p>
                        </div>
                    </div>
                </div>
                <div class="detail-desc">
                    <h3 tabindex="0" class="desc-title">Description:</h3>
                    <p tabindex="0" id="desc">dr. {{ $doctor->name }} adalah Dokter Spesialis yang aktif melayani pasien di RS Go Sakit. dr. {{ $doctor->name }} mendapatkan gelar spesialisnya setelah menamatkan pendidikan di Universitas Indonesia.
                        Beliau tergabung dalam Ikatan Dokter Anak Indonesia (IDAI) dan Ikatan Dokter Indonesia (IDI) dapat memberikan layanan konsultasi seputar penyakit anda.
                        Segera dapatkan antrian pada dr. {{ $doctor->name }} dengan memilih jadwal dibawah ini yang tersedia.</p>
                </div>
            </div>
        </div>

        <div class="subtitle wow zoomIn">
            <h1 class="subtitle-jadwal" tabindex="0">Pilih Waktu Kunjungan</h1>
        </div>

        <form method="POST" action="{{ route('userschedulepost') }}" enctype="multipart/form-data">
            @csrf
            <div class="button-container-ini wow fadeInRight">
                <div class="radio-container">
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    @foreach ($jadwal as $index => $j)
                    <div class="radio-item" onclick="view_time('#{{ $index }}')">
                        <input type="radio" id="hari-{{ $index }}" name="tanggal" value="{{ $index }}">
                        <label class="btn-labl" for="hari-{{ $index }}">
                            <div class="jadwal-btn">
                                <div class="hari">
                                    {{ $index }}
                                </div>
                                <div class="tanggal">
                                    @php
                                    $firstDate = true;
                                    @endphp
                                    @foreach ($j as $waktu => $jam)
                                    @foreach ($jam as $key => $jm)
                                    @if ($firstDate)
                                    <div>{{ $jm['date'] }}</div>
                                    @php
                                    $firstDate = false;
                                    @endphp
                                    @endif
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>

            @foreach ($jadwal as $index => $j)
            <div class="time-container section_jam {{ $index != 'Senin' ? 'd-none' : '' }}" id="{{ $index }}">
                @foreach ($j as $waktu => $jam)
                <div class="accordion">
                    {{ $waktu }}
                    <div>+</div>
                </div>
                <div class="clock-cont">
                    @foreach ($jam as $key => $jm)
                    <input type="radio" id="{{ $key }}" name="jam">
                    <label class="btn-labl clock-item" for="{{ $key }}">{{ $jm['time'] }}</label>
                    @endforeach
                </div>
                @endforeach
            </div>
            @endforeach

            <div class="submit-container">
                <div class="wrap">
                    <div>
                        <h5 class="confirm-text">Isi Tanggal dan Waktu Terlebih Dahulu</h5>
                    </div>
                    <div class="submit-btn disabled" type="submit">Konfirmasi</div>
                </div>
            </div>


            <!-- Modal View  -->
            <div class="modal-container" id="modal-1">
                <div class="container-konfirmasi-big">

                    <div class="subtitle">
                        <h1 class="modal-title" tabindex="0">Konfirmasi Janji</h1>
                    </div>

                    <div class="container-konfirmasi">
                        <img class="konfirmasi-thumb" src="{{ asset($doctor->photo) }}" alt="">
                        <div class="konfirmasi-content">
                            <div class="konfirmasi-container-subtitel">
                                <h1 tabindex="0" class="list-konfirmasi-title">{{ $doctor->name }}</h1>
                                @foreach ($poli as $p)
                                @if ($p->id == $doctor->poli_id)
                                <h3 tabindex="0" class="konfirmasi-poli">{{ $p->name }}</h3>
                                @endif
                                @endforeach
                            </div>

                            <div class="detail-desc">
                                <h1 tabindex="0" class="konfirmasi-tanggal"></h1>
                                <h3 class="konfirmasi-jam"></h3>
                            </div>
                            <div class="btns">
                                <div class="btn back-btn btn-danger" id="edit">Ubah</div>
                                <div class="btn btn-primary" id="next">Buat Janji</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Modal View 2  -->
            <div class="modal-container" id="modal-2">
                <div class="container-konfirmasi-big">

                    <div class="subtitle">
                        <h1 class="modal-title" tabindex="0">Konfirmasi Janji</h1>
                    </div>

                    <div class="container-konfirmasi">
                        <div class="animation-cont">
                            <lottie-player class="animation" src="https://assets3.lottiefiles.com/packages/lf20_LIU4vHuu1W.json" background="transparent" speed="1.5" loop autoplay></lottie-player>
                        </div>
                        <div class="question-content">

                            <div class="konfirmasi-container-subtitel">
                                <h1 tabindex="0" class="question">Apakah Anda Yakin?</h1>
                                <p tabindex="0" class="konf-text">Setelah anda membuat janji, proses pembatalan membutuhkan waktu sekitar 24 jam</p>
                            </div>

                            <div class="btns">
                                <div class="btn back-btn btn-danger" id="batal">Batal</div>
                                <button id="riwayat" class="btn btn-primary" type="submit">Buat Janji</button>
                                <!-- <a href="/riwayat" class="btn btn-primary">Buat Janji</a> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </section>
</main>
@push('js')
<script>
    function view_time(hari) {
        var sectionJam = document.querySelectorAll('.section_jam');
        sectionJam.forEach(function(element) {
            element.classList.add('d-none');
        });

        var selectedHari = document.querySelector(hari);
        selectedHari.classList.remove('d-none');
    }
</script>
@endpush
@endsection