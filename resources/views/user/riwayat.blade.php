@extends('user.layouts.main')

@section('content')
<div class="page-section bg-light">
    @if (session()->has('success'))
    <div class="alert alert-success solid alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
            <polyline points="9 11 12 14 22 4"></polyline>
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
        </svg>
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
    </div>
    @endif
    
    <div class="title-container">
        <h1>Riwayat</h1>
    </div>

    <div class="riwayat-cont-big">
        @foreach ($userSchedules as $userSchedule)
        <div class="riwayat-cont-item">
            <div class="riwayat-item-head">
                <div>
                    <h4>Rincian Kunjungan</h4>
                    <p>{{ $userSchedule->doctorSchedule->waktu }} Hari</p>
                </div>
                <div>
                    <p>Order ID: Order-{{ $userSchedule->id }}</p>
                </div>
            </div>
            <div class="riwayat-item-body">
                <div class="dokter">
                    <h3>Dr. {{ $userSchedule->doctorSchedule->doctor->name }}</h3>
                    <p>{{ $userSchedule->doctorSchedule->doctor->poli->name }}</p>
                </div>
                <div class="Tanggal">
                    <h3>{{ $userSchedule->doctorSchedule->formattedScheduleDay }}, {{ $userSchedule->doctorSchedule->formattedScheduleDate }}</h3>
                    <p>{{ $userSchedule->doctorSchedule->formattedScheduleTime }}</p>
                </div>
                <div class="status diterima">
                    <h4>{{ $userSchedule->doctorSchedule->status }}</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection