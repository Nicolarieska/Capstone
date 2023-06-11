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
            <h1 tabindex="0" class="font-weight-normal">Poli Gigi</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div>

<main>
    <section>
    <div class="subtitle wow zoomIn">
        <h1 class="subtitle-text" tabindex="0">Biodata Dokter</h1>
    </div>

    <div class="container-biodata wow zoomIn">
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
                <h3 tabindex="0" class="desc-title">Description:</h3>
                <p tabindex="0" id="desc">dr. Ackni Hartati, Sp.A, M.Kes adalah Dokter Spesialis Anak yang aktif melayani pasien di RS Permata Bekasi, RS EMC Pekayon, dan Primaya Hospital Bekasi Timur. dr. Ackni Hartati, Sp.A, M.Kes mendapatkan gelar spesialisnya setelah menamatkan pendidikan di Universitas Padjadjaran. 
                Beliau tergabung dalam Ikatan Dokter Anak Indonesia (IDAI) dan Ikatan Dokter Indonesia (IDI) dapat memberikan layanan konsultasi seputar tumbuh dan kembang anak.
                Harga yang tertera merupakan biaya konsultasi dokter, belum termasuk tindakan lain dan biaya admin dari RS/Klinik (apabila ada).</p>
            </div>
        </div>
    </div>

    <div class="subtitle wow zoomIn">
        <h1 class="subtitle-jadwal" tabindex="0">Pilih Waktu Kunjungan</h1>
    </div>

    <form action="">    

        <div class="button-container-ini wow zoomIn">
            <div class="radio-container">
                <div class="radio-item">
                    <input type="radio" id="day-1" name="tanggal" value="5 Juni 2023" checked="checked">
                    <label class="btn-labl" for="day-1">
                        <div class="jadwal-btn">
                            <div class="hari">
                                Senin
                            </div>
                            <div class="tanggal">
                                5 Juni
                            </div>
                        </div>
                    </label>
                </div>

                <div class="radio-item">
                    <input type="radio" id="day-2" name="tanggal" value="6 Juni 2023">
                    <label class="btn-labl" for="day-2">
                        <div class="jadwal-btn">
                            <div class="hari">
                                Selasa
                            </div>
                            <div class="tanggal">
                                6 Juni
                            </div>
                        </div>
                    </label>
                </div>

                <div class="radio-item">
                    <input type="radio" id="day-3" name="tanggal" value="7 Juni 2023">
                    <label class="btn-labl" for="day-3">
                        <div class="jadwal-btn">
                            <div class="hari">
                                Rabu
                            </div>
                            <div class="tanggal">
                                7 Juni
                            </div>
                        </div>
                    </label>
                </div>

                <div class="radio-item">
                    <input type="radio" id="day-4" name="tanggal" value="8 Juni 2023">
                    <label class="btn-labl" for="day-4">
                        <div class="jadwal-btn">
                            <div class="hari">
                                Kamis
                            </div>
                            <div class="tanggal">
                                8 Juni
                            </div>
                        </div>
                    </label>
                </div>

                <div class="radio-item">
                    <input type="radio" id="day-5" name="tanggal" value="9 Juni 2023">
                    <label class="btn-labl" for="day-5">
                        <div class="jadwal-btn">
                            <div class="hari">
                                Jumat
                            </div>
                            <div class="tanggal">
                                9 Juni
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>

        <div class="time-container">
            <div class="accordion">
                Pagi
                <div>+</div>
            </div>
            <div class="clock-cont">
                <input type="radio" id="07.00" name="jam" value="07.00">
                <label class="btn-labl clock-item" for="07.00">07.00</label>
                
                <input type="radio" id="09.00" name="jam" value="09.00">
                <label class="btn-labl clock-item" for="09.00">09.00</label>
            </div>

            <div class="accordion">
                Siang
                <div>+</div>
            </div>
            <div class="clock-cont">
                <input type="radio" id="11.00" name="jam" value="11.00">
                <label class="btn-labl clock-item" for="11.00">11.00</label>
                
                <input type="radio" id="13.00" name="jam" value="13.00">
                <label class="btn-labl clock-item" for="13.00">13.00</label>
            </div>

            <div class="accordion">
                Sore
                <div>+</div>
            </div>
            <div class="clock-cont">
                <input type="radio" id="15.00" name="jam" value="15.00">
                <label class="btn-labl clock-item" for="15.00">15.00</label>
                
                <input type="radio" id="17.00" name="jam" value="17.00">
                <label class="btn-labl clock-item" for="17.00">17.00</label>
            </div>
        </div>
    

        <footer>
            <div class="submit-container">
                <div class="wrap">
                    <div>
                        <h5 class="confirm-text">(Hari, Tanggal, Waktu)</h5>
                    </div>
                    <input type="submit" class="submit-btn not-allowed-cursor" value="Buat Janji">
                </div>
            </div>
        </footer>
    </form>
    </section>
</main>
@endsection