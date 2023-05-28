@extends('login.layouts.main')

@section('content')
<div class="main">

    <div class="container-form">
        <form method="POST" action="{{ route('login.submit') }}" id="signup-form" class="signup-form" enctype="multipart/form-data">
            @csrf
            <h3 class="form-tittle">Login</h3>
            <fieldset>
                <div class="form-row">

                    <div class="form-group-flex">
                        <div class="form-thumb-container">
                            <img class="form-thumb" src="{{ asset('assets/images/login.jpg') }}" alt="">
                            <h3 class="form-subtittle">Masukkan Data Diri Anda</h3>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="Password" />
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn" />
                        </div>

                        <div class="link-holder">
                            Belum punya akun?<a href="/register"> Sign up</a>
                        </div>

                    </div>
            </fieldset>
        </form>
    </div>

</div>
@endsection