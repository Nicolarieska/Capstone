@extends('user.layouts.main')

@section('content')
<div class="page-section bg-light">
    <div class="title-container">
        <h1>Riwayat</h1>
    </div>

    <div class="riwayat-cont-big">
        <div class="riwayat-cont-item">
            <div class="riwayat-item-head">
                <div>
                    <h4>Rincian Kunjungan</h4>
                    <p>12 Juni 2022, 14.42 WIB</p>
                </div>
                <div>
                    <p>Order ID: O-12345</p>
                </div>
            </div>
            <div class="riwayat-item-body">
                <div class="dokter">
                    <h3>Dr. Akmal Aliffandhi A</h3>
                    <p>Poli Gigi</p>
                </div>
                <div class="Tanggal">
                    <h3>14 Juni 2023</h3>
                    <p>17.00 WIB</p>
                </div>
                <div class="status diterima">
                    <h4>Diterima</h4>
                </div>
                <div class="detail-btn">
                    <p>
                        Lihat Detail 
                        <span class="material-symbols-outlined">chevron_right</span>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="riwayat-cont-item">
            <div class="riwayat-item-head">
                <div>
                    <h4>Rincian Kunjungan</h4>
                    <p>12 Juni 2022, 14.42 WIB</p>
                </div>
                <div>
                    <p>Order ID: O-12345</p>
                </div>
            </div>
            <div class="riwayat-item-body">
                <div class="dokter">
                    <h3>Dr. Akmal Aliffandhi A</h3>
                    <p>Poli Gigi</p>
                </div>
                <div class="Tanggal">
                    <h3>14 Juni 2023</h3>
                    <p>17.00 WIB</p>
                </div>
                <div class="status dibatalkan">
                    <h4>Dibatalkan</h4>
                </div>
                <div class="detail-btn">
                    <p>
                        Lihat Detail 
                        <span class="material-symbols-outlined">chevron_right</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="riwayat-cont-item">
            <div class="riwayat-item-head">
                <div>
                    <h4>Rincian Kunjungan</h4>
                    <p>12 Juni 2022, 14.42 WIB</p>
                </div>
                <div>
                    <p>Order ID: O-12345</p>
                </div>
            </div>
            <div class="riwayat-item-body">
                <div class="dokter">
                    <h3>Dr. Akmal Aliffandhi A</h3>
                    <p>Poli Gigi</p>
                </div>
                <div class="Tanggal">
                    <h3>14 Juni 2023</h3>
                    <p>17.00 WIB</p>
                </div>
                <div class="status menunggu">
                    <h4>Menunggu</h4>
                </div>
                <div class="detail-btn">
                    <p>
                        Lihat Detail 
                        <span class="material-symbols-outlined">chevron_right</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection