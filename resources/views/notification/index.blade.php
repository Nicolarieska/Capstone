@extends('notification.layouts.main')

@section('content')
<div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
        <div class="container text-center wow zoomIn">
            <h1 class="display-4">MOHON MAAF</h1>
            <span class="subhead">Akun anda sedang dalam proses verifikasi</span>
            <br>
            <span class="subhead">Ulangi login beberapa saat lagi</span>
            <br> <br>
            <a href="/home" class="btn btn-primary">Home</a>
        </div>
    </div>
</div>

@endsection