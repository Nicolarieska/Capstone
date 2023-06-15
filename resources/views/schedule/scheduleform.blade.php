@extends('schedule.layouts.main')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Buat Jadwal Berdasar Poli</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Jadwal</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Poli</a></li>
            </ol>
        </div>
        <div class="card w-100">
            <div class="card-body">
                <form method="POST" action="/schedulepost" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3 row">
                            <label class="text-label">Nama Dokter</label>
                            <div class="col-sm-9">

                                <input type="text" class="form-control w-100" id="scheduledate" value="{{ $doctor->name }}" style="border: 1px solid #000000; color: #000000;" required disabled>
                                <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">

                                @error('doctor_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="mb-3 row">
                            <label class="text-label">Pilih Tanggal</label>
                            <div class="col-sm-9">
                                <input type="datetime-local" class="form-control w-100" id="scheduledate" value="{{ is_array(old('scheduledate')) ? old('scheduledate')[0] : old('scheduledate') }}" name="scheduledate[]" style="border: 1px solid #000000; color: #000000;" required>

                                @error('scheduledate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <a href="#" class="addmulti btn btn-primary plus float-right">+</a>
                            </div>
                        </div>

                        <div class="multi">

                        </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection