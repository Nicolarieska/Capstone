@extends('schedule.layouts.main')

@section('content')
<div class="content-body">

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
                                <th class="text-center" width="200px">ACTION</th>
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
                                <td><a href="javascript:void()" class="badge badge-rounded badge-warning text-white">{{ $s->doctorschedule->status }}</a></td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <form action="/complete/{{ $s->id }}" method="post" class="d-inline">
                                            @method('put')
                                            @csrf
                                            <button type="submit" class="btn btn-rounded btn-success">Selesai</button>
                                        </form>
                                    </div>
                                </td>
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