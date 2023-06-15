@extends('schedule.layouts.main')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-black font-w600">BUAT JADWAL DOKTER</h2>
                <p class="mb-0">Pilih Dokter Berdasarkan Poli</p>
            </div>
        </div>
        <div class="row">
            @foreach($poli as $p)
            <div class="col-xl-3 col-xxl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="{{ asset($p->photo) }}" alt="">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="ecom-product-detail.html">{{ $p->name }}</a></h4>
                                <a href="{{ url('/indexdoctor', $p->id) }}" class="btn btn-square btn-primary">Lihat Dokter</a>
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