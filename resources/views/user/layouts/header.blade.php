<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +62 895 412 308 117</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span> Gosakit@gmail.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-dribbble"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/homeuser">
                <img src="{{asset('assets/images/logo2.png')}}" class="logo" alt="GoSakit">
                <span class="text-primary">Go</span><span class="second-color">Sakit</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/homeuser">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutuser">Tentang kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/registerpoli">Pendaftaran</a>
                    </li>
                    <li class="nav-item dropdownn">
                        <div class="user-nav">
                            <img src="{{asset('assets/images/your-picture.png')}}" alt="">
                        </div>
                        <div class="user-nav-items hide">
                            <a class="nav-link-drop" href="/contactuser">Kontak</a>
                            <a class="nav-link-drop" href="/riwayat">Riwayat</a>
                            <a class="nav-link-drop logout" class="logout" href="/logout">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>