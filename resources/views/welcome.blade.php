<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APEPENS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color:rgb(255, 217, 61);">
        <div class="container px-5">
            <a href="{{ url('/') }}" class="navbar-brand fw-bold">APEPENS</a>
            <a href="#About" class="navbar-brand fw-bold">About</a>
            <a href="#contact" class="navbar-brand fw-bold">Contact</a>
        </div>
    </nav>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-5 fw-bolder text-white">Aplikasi Pengaduan Elektronik <span
                            style="color: rgb(255, 217, 61)">PENS<span>
                    </h1><br>
                    <h4 class="lead text-white mb-4">Menerima Segala Jenis Kritik, Saran, dan Laporan</h4>
                    <br>
                    @if (Route::has('login'))
                    @auth
                    <button type="button" class="btn btn-warning"><a class="nav-link"
                            href="{{ url('/dashboard') }}">Dashboard</a></button>
                    @else
                    <button type="button" class="btn btn-warning"><a class="nav-link"
                            href="{{ route('login') }}">Login</a></button>

                    @if (Route::has('register'))
                    <button type="button" class="btn btn-primary"><a class="nav-link"
                            href="{{ route('register') }}">Register</a>
                    </button>
                    @endif
                    @endauth
                    @endif
                </div>
                <div class="col text-center">
                    <img src="{{ asset('images/pens.png') }}" alt="logo pens" class="logo">
                </div>
            </div>
        </div>
    </section>

    <section id="About" style="padding-top: 5rem; padding-bottom: 5rem; background-color:rgb(255, 217, 61)">
        <div class="container">
            <h1>For Your Information</h1><br>
            <div class="row">
                <div class="col">
                    <h2 class="h4 fw-bolder">Akses Website</h2>
                    <p>Lakukan Register jika belum memiliki akun atau login jika memiliki akun</p>
                </div>
                <div class="col">
                    <h2 class="h4 fw-bolder">Buat Laporan</h2>
                    <p>Anda dapat membuat laporan sesuai dengan kategori yang ada</p>
                </div>
                <div class="col">
                    <h2 class="h4 fw-bolder">Voila! Laporan Anda akan Di respon</h2>
                    <p>Tunggu Laporan untuk ditindak lanjuti</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63323.07163244481!2d112.72783773124998!3d-7.275847099999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ea2ae883%3A0xbe22c55d60ef09c7!2sPoliteknik%20Elektronika%20Negeri%20Surabaya!5e0!3m2!1sid!2sid!4v1680625523884!5m2!1sid!2sid"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col">
                    <h2>Contact</h2>
                    <br>
                    <h5><span class="material-symbols-outlined">
                            support_agent
                        </span> 0811 3330 5005</h5>
                    <h5><span class="material-symbols-outlined">
                            contact_mail
                        </span> kesekretariatan@pens.ac.id / humas@pens.ac.id</h5>
                    <br>
                    <h6>Operation Time : 08.00-16.00</h6>
                </div>
    </section>
    <section id="copy">
        <footer class="py-5">
            <div class="container px-5">
                <p class="m-0 text-center text-dark">Copyright &copy; APEPENS 2023</p>
            </div>
        </footer>
    </section>

</body>

</html>