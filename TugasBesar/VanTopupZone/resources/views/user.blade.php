<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VanTopUpZone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">VanTopUpZone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="/register">Daftar Akun</a></li>
                </ul>
            </div>
        </div>
    </nav>     

    <!-- home -->
    <section id="home" class="py-5">
    <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
        <div class="container">
            <div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('gambar/slide1.png') }}" class="d-block w-100" alt="slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('gambar/slide2.png') }}" class="d-block w-100" alt="slide 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- masuk user id -->
        <h3 class="text-center mb-4">Masukkan User ID</h3>
        <div class="container d-flex justify-content-center">
            <div class="row w-100 justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan User ID"
                        aria-label="Masukkan User ID">
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <input type="text" class="form-control" placeholder="Zone ID" aria-label="Zone ID">
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <button type="submitBtn" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
        <!-- user id end -->

        <!-- promo -->
        <h3 class="text-center mt-2 mb-4">Promo Spesial</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="promo-box text-center">
                    <h5>Diskon 20%</h5>
                    <p>Untuk pembelian di atas 500 diamond</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="promo-box text-center">
                    <h5>Cashback 10%</h5>
                    <p>Untuk semua transaksi pertama</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="promo-box text-center">
                    <h5>Bonus Item</h5>
                    <p>Untuk pembelian lebih dari 1000 diamond</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- produk section -->
    <section id="produk" class="bg-gradient py-5">
        <div class="container">
            <h2 class="text-center mb-4">Produk Kami</h2>
            <div class="row g-4">
                <!-- produk -->
                @foreach($game as $a)
                <div class="col-6 col-md-4">
                    <a href="/konten">
                    <div class="card p-3 text-center">
                    <img src="{{ asset('storage/' . $a->gambar) }}" alt="Gambar" class="w-24 h-16 object-cover rounded">
                        <h5 class="mt-3">{{ $a->nama }}</h5>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- tentang kami section -->
    <section id="tentang" class="py-5">
        <div class="container text-center">
            <div class="card p-2"style= "m-auto;">
                <h2 class="mb-4">Tentang Kami</h2>
                <p>VanTopUpZone adalah platform untuk Topup berbagai game online
                    yang terpercaya, aman, dan tentunya cepat.
                    Kami menawarkan untuk berbagai game populer dengan harga murah dan transaksi yang mudah.
                    Dengan layanan pelanggan yang responsif, kami siap mendukung pengalaman bermain Anda kapan saja!
                </p>
            </div>
        </div>
    </section>

    <!-- kontak -->
    <section id="kontak">
        <div class="container text-center">
            <h2 class="mb-4">Hubungi Kami</h2>
            <h5>Ikuti kami di platform berikut!<h5>
            <div class="social-icons d-flex justify-content-center">
                <a href="https://wa.me/6285721368639" target="_blank"><img src="{{ asset('gambar/logo wa.jpg') }}" alt="whatsapp"></a>
                <a href="https://www.instagram.com/vantopupzone/profilecard/?igsh=MTZrODFiaGxoOHV3cQ=="
                    target="_blank"><img src="{{ asset('gambar/logo ig.jpg') }}" alt="instagram"></a>
                <a href="https://github.com/revania17/K824" target="_blank"><img src="{{ asset('gambar/logo github.png') }}" alt="github"></a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js" defer></script>
</body>

</html>