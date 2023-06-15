@extends('schedule.layouts.main')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Buat Jadwal Dokter</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Jadwal</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Dokter</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            @foreach ($doctor as $d)
            <div class="col-xl-4 col-lg-12 col-sm-12">
                <div class="card overflow-hidden">
                    <div class="text-center p-3 overlay-box " style="background-image: url(images/big/img1.jpg);">
                        <div class="profile-photo">
                            <img src="{{ asset($d->photo) }}" width="100" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h3 class="mt-3 mb-1 text-white">{{ $d->name }}</h3>
                        @foreach ($poli as $p)
                        @if ($p->id == $d->poli_id)
                        <p class="text-white mb-0">{{ $p->name }}</p>
                        @endif
                        @endforeach
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Jenis Kelamin</span> <strong class="text-muted">{{ $d->gender }}</strong></li>
                    </ul>
                    <div class="card-footer border-0 mt-0">
                        <a href="/scheduleform/{{ $d->id }}" class="btn btn-primary btn-lg btn-block">
                            <i class="fa fa-bell-o"> </i> Buat Jadwal
                        </a>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Buat Jadwal Dokter</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="card-body">
                                <div class="basic-form" style="text-align: left;">
                                    <form method="POST" action="/schedulepost/{{ $d->id }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <div class="mb-3 row">
                                                <label class="text-label">Pilih Tanggal</label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control @error('scheduledate') is-invalid @enderror" id="scheduledate" value="{{ old('scheduledate') }}" name="scheduledate[]" style="border: 1px solid #000000; color: #000000;" required>

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
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger light float-left" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>

    </div>
</div>
@endsection