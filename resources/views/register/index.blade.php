@extends('register.layouts.main')

@section('content')
<div class="main">

    <div class="container">
        <h2>Buat Akun Kamu</h2>
        <p style="margin-top: 15px; text-align:center">Sudah punya akun? <a href="/login"><u>Sign in</u></a></p>
        <form method="POST" action="{{ route('register.submit') }}" id="signup-form" class="signup-form" enctype="multipart/form-data">
            @csrf
            <h3>
                Akun
            </h3>

            <fieldset>
                <div class="form-row">
                    <div class="form-file">
                        <input type="file" class="inputfile" name="your_picture" id="your_picture" onchange="readURL(this);" data-multiple-caption="{count} files selected" multiple />
                        <label for="your_picture">
                            <figure>
                                <img src="{{asset('assets/images/your-picture.png')}}" alt="" class="your_picture_image">
                            </figure>
                            <span class="file-button">choose picture</span>
                        </label>
                    </div>
                    <div class="form-group-flex">
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                </div>
            </fieldset>

            <h3>
                Data Pribadi
            </h3>

            <fieldset>
                <div class="form-row form-input-flex">
                    <div class="form-input">
                        <input type="text" name="nik" id="nik" placeholder="NIK" />
                    </div>
                    <div class="form-input">
                        <input type="text" name="name" id="name" placeholder="Nama" />
                    </div>
                </div>

                <div class="form-row form-input-flex">
                    <div class="form-input">
                        <input type="text" name="place" id="place" placeholder="Tempat Lahir" />
                    </div>
                    <div class="form-input">
                        <input type="date" name="birth" id="birth" placeholder="Tanggal Lahir" />
                    </div>
                </div>

                <div class="form-row form-input-flex">
                    <div class="form-input">
                        <input type="text" name="phonenumber" id="phonenumber" placeholder="Nomor Telepon" />
                    </div>
                </div>

            </fieldset>

            <h3>
                Nomor Rekam Medik
            </h3>
            <fieldset>
                <div class="form-row form-input-flex">
                    <div class="form-input">
                        <input type="text" name="medicalrecords" id="medicalrecords" placeholder="Nomor Rekam Medis (Opsional)" />
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

</div>
@endsection