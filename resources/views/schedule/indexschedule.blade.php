@extends('schedule.layouts.main')

@section('content')
<div class="content-body">

    <!-- row -->
    <div class="container-fluid">
        <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-black font-w600">DATA SEMUA JADWAL DOKTER</h2>
                <p class="mb-0">Halaman Untuk Kelola Jadwal Dokter</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive card-table">
                    <table id="example5" class="display dataTablesCard white-border table-responsive-xl">
                        <thead>
                            <tr>
                                <th class="text-center">ID Jadwal</th>
                                <th class="text-center" width="200px">Poli</th>
                                <th class="text-center" width="200px">Nama Dokter</th>
                                <th class="text-center" width="200px">Hari</th>
                                <th class="text-center" width="200px">Tanggal</th>
                                <th class="text-center" width="200px">Jam</th>
                                <th class="text-center" width="200px">Waktu</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $s)
                            <tr class="text-center">
                                <td>{{ $s->id }}</td>
                                <td>{{ $s->doctor->poli->name }}</td>
                                <td>{{ $s->doctor->name }}</td>
                                <td>{{ $s->day }}</td>
                                <td>{{ $s->date }}</td>
                                <td>{{ $s->time }}</td>
                                <td>
                                    @switch($s->waktu)
                                    @case('Pagi')
                                    Pagi
                                    @break
                                    @case('Siang')
                                    Siang
                                    @break
                                    @case('Sore')
                                    Sore
                                    @break
                                    @case('Malam')
                                    Malam
                                    @break
                                    @default
                                    -
                                    @endswitch
                                </td>
                                <td></td>
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