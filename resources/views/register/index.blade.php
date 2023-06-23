@extends('register.layouts.main')

@section('content')
<div class="main">

    <div class="container">
        <div class="back-home">
            <a href="/">
                <span class="material-symbols-outlined">Back</span>
            </a>
        </div>


        <h2>Register</h2>
        <p style="margin-top: 15px; text-align:center">Sudah punya akun? <a href="/login"><u>Login</u></a></p>
        <form method="POST" action="{{ route('register.submit') }}" id="signup-form" class="signup-form" enctype="multipart/form-data">
            @csrf
            <h3>
                Akun
            </h3>

            <fieldset>
                <div class="form-row">
                    <div class="form-file">
                        <input type="file" class="inputfile" name="photo" id="your_picture" onchange="readURL(this);" data-multiple-caption="{count} files selected" multiple />
                        <label for="your_picture">
                            <figure>
                                <img src="{{asset('assets/images/your-picture.png')}}" alt="" class="your_picture_image">
                            </figure>
                            <span class="file-button">pilih foto profil</span>
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
                        <input placeholder="Tanggal Lahir" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.value == '' ? this.type='text' : this.type='date')" name="birth" id="birth">
                    </div>
                </div>

                <div class="form-row form-input-flex">
                    <div class="form-input">
                        <input type="text" name="gender" id="gender" placeholder="Jenis Kelamin (Laki - Laki / Perempuan)" />
                    </div>
                    <div class="form-input">
                        <input type="text" name="phonenumber" id="phonenumber" placeholder="Nomor Telepon" />
                    </div>
                </div>

            </fieldset>

            <h3>
                Nomor Rekam Medis
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