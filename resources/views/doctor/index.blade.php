@extends('doctor.layouts.main')

@section('content')
<div class="content-body">

    @if (session()->has('add'))
    <div class="alert alert-success solid alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
            <polyline points="9 11 12 14 22 4"></polyline>
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
        </svg>
        <strong>Success!</strong> {{ session('add') }}
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
    </div>
    @endif

    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-black font-w600">DATA DOKTER</h2>
                <p class="mb-0">Halaman Untuk Kelola Data Dokter</p>
            </div>
            <div>
                <a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+ Tambah Dokter</a>
                <a href="index.html" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>Filter Date</a>
            </div>
        </div>

        <!-- Add Order -->
        <div class="modal fade" id="addOrderModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data Dokter</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('doctorpost') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-file" style="display: flex; align-items: center;">
                                <label for="your_picture" style="margin-right: 10px;">
                                    <figure>
                                        <img id="preview_image" src="{{asset('assets/images/your-picture.png')}}" alt="" class="your_picture_image">
                                    </figure>
                                </label>
                                <div style="display: flex; flex-direction: column;">
                                    <span class="file-button" onclick="chooseFile()" style="margin-bottom: 5px;">Pilih Foto Dokter</span>
                                    <input type="file" class="inputfile" name="photo" id="your_picture" onchange="previewImage(event);" data-multiple-caption="{count} files selected" multiple>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Dokter</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama" value="{{ old('name') }}" />

                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="Laki-laki">
                                        <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="perempuan" value="Perempuan">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Poli</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="poli_id" id="poli_id" @if($poli->isEmpty()) disabled @endif>
                                        @if($poli->isEmpty())
                                        <option disabled selected>Tidak Ada Data Poli</option>
                                        @else
                                        @foreach ($poli as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    @if($errors->has('poli_id'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('poli_id') }}
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="table-responsive card-table">
                    <table id="example5" class="display dataTablesCard table-responsive-xl">
                        <thead>
                            <tr>
                                <th class="text-center">ID Dokter</th>
                                <th class="text-center" width="200px">Nama</th>
                                <th class="text-center" width="200px">Jenis Kelamin</th>
                                <th class="text-center" width="200px">Foto</th>
                                <th class="text-center" width="200px">Poli</th>
                                <th class="text-center" width="200px">Action</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctor as $d)
                            <tr class="text-center">
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->gender }}</td>
                                <td>
                                    <a href="{{ asset($d->photo) }}" class="image-popup">
                                        <img src="{{ asset($d->photo) }}" alt="Doctor Photo" width="100" height="100">
                                    </a>
                                    <div class="mfp-hide">
                                        <div class="popup-content">
                                            <img src="{{ asset($d->photo) }}" alt="Doctor Photo" width="500" height="500">
                                            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                                        </div>
                                    </div>
                                </td>


                                <td>{{ $d->poli->name }}</td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-outline-dark text-nowrap btn-sm">No Schedule</a>
                                </td>
                                <td><span class="text-nowrap">+12 4122 4556</span></td>
                                <td><span class="text-dark">Unavailable</span></td>
                                <td>
                                    <div class="dropdown ml-auto text-right">
                                        <div class="btn-link" data-toggle="dropdown">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View Detail</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
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