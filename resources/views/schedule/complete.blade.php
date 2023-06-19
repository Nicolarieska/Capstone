@extends('schedule.layouts.main')

@section('content')
<div class="content-body">

    @if (session()->has('complete'))
    <div class="alert alert-success solid alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
            <polyline points="9 11 12 14 22 4"></polyline>
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
        </svg>
        <strong>Success!</strong> {{ session('complete') }}
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
    </div>
    @endif

    <!-- row -->
    <div class="container-fluid">
        <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-black font-w600">DATA JADWAL DOKTER</h2>
                <p class="mb-0">Halaman Untuk Kelola semua Jadwal Dokter</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive card-table">
                    <table class="table primary-table-bordered">
                        <thead class="thead-primary">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center" width="200px">POLI</th>
                                <th class="text-center" width="200px">DOKTER</th>
                                <th class="text-center" width="200px">HARI</th>
                                <th class="text-center" width="200px">TANGGAL</th>
                                <th class="text-center" width="200px">JAM</th>
                                <th class="text-center" width="200px">NAMA PASIEN</th>
                                <th class="text-center" width="200px">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $s)
                            <tr class="text-center" style="background-color: white; color: black;">
                                <td>{{ $s->id }}</td>
                                <td>{{ $s->doctorSchedule->doctor->poli->name }}</td>
                                <td>{{ $s->doctorschedule->doctor->name }}</td>
                                <td>{{ $s->doctorSchedule->formattedScheduleDay }}</td>
                                <td>{{ $s->doctorSchedule->formattedScheduleDate }}</td>
                                <td>{{ $s->doctorSchedule->formattedScheduleTime }}</td>
                                <td>{{ $s->users->name }}</td>
                                <td><a href="javascript:void()" class="badge badge-rounded badge-light">{{ $s->doctorschedule->status }}</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection