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

    @if (session()->has('update'))
    <div class="alert alert-warning solid alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
            <polyline points="9 11 12 14 22 4"></polyline>
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
        </svg>
        <strong>Update!</strong> {{ session('update') }}
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
    </div>
    @endif


    @if (session()->has('delete'))
    <div class="alert alert-danger solid alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
            <polyline points="9 11 12 14 22 4"></polyline>
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
        </svg>
        <strong>Delete!</strong> {{ session('delete') }}
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
                                <th class="text-center" width="200px">Foto</th>
                                <th class="text-center" width="200px">Nama</th>
                                <th class="text-center" width="200px">Jenis Kelamin</th>
                                <th class="text-center" width="200px">Poli</th>
                                <th class="text-center" width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctor as $d)
                            <tr class="text-center">
                                <td>{{ $d->id }}</td>
                                <td>
                                    <a href="#" onclick="showModal('{{ asset($d->photo) }}'); return false;">
                                        <img src="{{ asset($d->photo) }}" alt="Doctor Photo" width="100" height="100">
                                    </a>
                                    <div id="modal" style="display: none; position: fixed; z-index: 9999; top: 0; left: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.5);">
                                        <div id="modal-content" style="display: flex; justify-content: center; align-items: center; flex-direction: column; position: relative; margin: auto; padding: 20px; background-color: #fff;">
                                            <img id="modal-image" src="" alt="Doctor Photo">
                                            <button onclick="hideModal();" style="position: absolute; top: 10px; right: 10px; border: none; background-color: transparent; font-size: 20px; color: #000; cursor: pointer;" title="Close (Esc)" type="button" class="close-button">×</button>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->gender }}</td>
                                <td>{{ $d->poli->name }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="/doctorupdate/{{ $d->id }}" class="btn btn-rounded btn-warning" style="margin-bottom: 10px; margin-right: 10px;" data-toggle="modal" data-target="#edit-{{ $d->id }}">Edit</a>
                                        <a href="/doctordelete/{{ $d->id }}" class="btn btn-rounded btn-danger" style="margin-bottom: 10px;">Delete</a>
                                    </div>
                                </td>
                            </tr>

                            <div class="modal fade" id="edit-{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Dokter</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="container-fluid">

                                                <form method="POST" action="/doctorupdate/{{ $d->id }}" enctype="multipart/form-data">
                                                    @method("put")
                                                    @csrf
                                                    <div class="form-file" style="display: flex; align-items: center;">
                                                        <label for="your_picture" style="margin-right: 10px;">
                                                            <figure>
                                                                <img id="preview_edit" src="{{asset('assets/images/your-picture.png')}}" alt="" class="your_picture_image">
                                                            </figure>
                                                        </label>
                                                        <div style="display: flex; flex-direction: column;">
                                                            <span class="file-button" onclick="chooseFile()" style="margin-bottom: 5px;">Pilih Foto Dokter</span>
                                                            <input type="file" class="inputfile" name="photo" id="your_picture" onchange="previewEdit(event);" data-multiple-caption="{count} files selected" multiple>
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
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection