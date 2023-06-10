<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/beranda.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .color-primary {
            color: #FB763D;
        }

        .search-bar {
            border: none;
            height: 3.8rem !important;
        }

        .search-bar:focus {
            outline: none !important;
            border: none !important;
        }

        .submit-btn {
            background: linear-gradient(180deg, #28e646 0%, #15ca5e 100%);
            height: 3.3rem;
            outline: none !important;
        }
    </style>
</head>

<body>
    <div class="background" id="hero">
        <img src="{{ URL::to('design/top-left-header.svg') }}" alt="" class="design-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent z-3">
            <div class="container d-flex justify-content-between">
                <div class="d-flex gap-3">
                    <img src="{{ URL::to('icon/logo-proyekmuda.svg') }}" alt="" class="logo">
                    <a class="navbar-brand font-primary fw-bold fs-3" href="#">ProyekMuda</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 grid gap-lg-4 gap font-secondary fw-bold">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cari Proyek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Sign In</a>
                        </li>
                        <li class="nav-item bg-white rounded-5 px-4">
                            <a class="nav-link color-primary" href="#" tabindex="-1"
                                aria-disabled="true">Join</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container section" id="header">
            <div class="row">
                <div class="col-lg-8 col-12 my-auto text-white">
                    <h1 class="fs-1 text-lg-start">Temukan harga jasa <span class="fw-normal fw-lg-bold">freelance <br
                                class="d-none d-lg-block">
                            termurah</span>, dengan para <br> <span class="font-primary">Freelancer Muda</span>
                    </h1>
                    <form class="d-flex mt-3 w-75 w bg-white rounded-3" role="search">
                        <input class="form-control me-2 bg-white search-bar h-25" type="search"
                            placeholder="Cari Proyek..." aria-label="Search">
                        <button
                            class="btn btn-outline-success rounded-3 submit-btn text-white font-secondary fw-bold my-auto me-1 px-lg-5 px-2"
                            type="submit">Search</button>
                    </form>
                    <div class="mt-4 me-0 gap-4 d-lg-flex d-none">
                        <button class="btn btn-outline-light rounded-5 px-3 py-2">
                            <span><img src="{{ URL::to('icon/pencil-icon.svg') }}" alt="" class="px-2"></span>
                            Digital Design
                        </button>
                        <div class="btn btn-outline-light rounded-5 px-3 py-2">
                            <span><img src="{{ URL::to('icon/chart-icon.svg') }}" alt="" class="px-2"></span>
                            Project Based
                        </div>
                        <div class="btn btn-outline-light rounded-5 px-3 py-2">
                            <span><img src="{{ URL::to('icon/toga-icon.svg') }}" alt="" class="px-2"></span>
                            Tutor Academic
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-0 d-lg-flex d-none me-auto">
                    <div class="card poster text-bg-dark bg-transparent border-0 my-auto">
                        <img src="{{ URL::to('design/backdrop-left.svg') }}" alt=""
                            class="design-backdrop-left z-1">
                        <img src="{{ URL::to('design/backdrop-right.svg') }}" alt=""
                            class="design-backdrop-right z-1">
                        <img src="{{ URL::to('img/header-poster.png') }}" class="card-img w-100 relative z-3 h-100"
                            alt="Project Of The Week">
                        <div class="card-img-overlay d-flex align-items-end">
                            <div class="z-3">
                                <p class="card-text m-0 p-0">Best Projects of the Week</p>
                                <p class="card-title fw-bold m-0 p-0">Shinobu Kocho, <span class="fw-normal">Graphic
                                        Designer</span></p>
                                <div class="card-text">
                                    <img src="{{ URL::to('icon/star-icon.svg') }}" alt="" class="">
                                    <img src="{{ URL::to('icon/star-icon.svg') }}" alt="" class="">
                                    <img src="{{ URL::to('icon/star-icon.svg') }}" alt="" class="">
                                    <img src="{{ URL::to('icon/star-icon.svg') }}" alt="" class="">
                                    <img src="{{ URL::to('icon/star-icon.svg') }}" alt="" class="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container section" id="benefits">
        <div class="row my-auto">
            <div class="col-lg-8 col-12 mt-lg-3 mt-0 justify-content-center">
                <h1 class="h1 fw-bold text-center text-lg-start">Kenapa <span
                        class="font-primary color-primary">ProyekMuda</span>?</h1>
                <div class="w-75 my-3">
                    <div class="d-flex gap-3">
                        <img src="{{ URL::to('icon/check-icon.svg') }}" alt="" class="">
                        <h4 class="text-decoration-none fw-semibold fs-5 py-1 my-0">Proyek ‘mahasiswa <span
                                class="fst-italic fw-normal">friendly</span>’</h4>
                    </div>
                    <p class="py-2 benefit-desc">ProyekMuda mewadahi semua kebutuhan mahasiswa secara akademis maupun
                        non-akademis.</p>
                </div>
                <div class="w-75 my-3">
                    <div class="d-flex gap-3">
                        <img src="{{ URL::to('icon/check-icon.svg') }}" alt="" class="">
                        <h4 class="text-decoration-none fw-semibold fs-5 py-1 my-0">Harga sesuai dompet mahasiswa</h4>
                    </div>
                    <p class="py-2 benefit-desc">Semua freelancer di bawah naungan ProyekMuda adalah mahasiswa yang
                        sudah terverifikasi, jadi jangan khawatir soal harga.</p>
                </div>
                <div class="w-75 my-3">
                    <div class="d-flex gap-3">
                        <img src="{{ URL::to('icon/check-icon.svg') }}" alt="" class="">
                        <h4 class="text-decoration-none fw-semibold fs-5 py-1 my-0">Proyek sesuai kehendak</h4>
                    </div>
                    <p class="py-2 benefit-desc">Lakukan briefing secara detail dengan freelancer sebelum memesan.</p>
                </div>
                <div class="w-75 my-3">
                    <div class="d-flex gap-3">
                        <img src="{{ URL::to('icon/check-icon.svg') }}" alt="" class="">
                        <h4 class="text-decoration-none fw-semibold fs-5 py-1 my-0">Lacak progres suatu proyek</h4>
                    </div>
                    <p class="py-2 benefit-desc">Proyek yang sedang dikerjakan akan diunggah secara berkala oleh
                        freelancer. Revisi dapat dilakukan seiring proyek berjalan.</p>
                </div>
                <div class="w-75 my-3">
                    <div class="d-flex gap-3">
                        <img src="{{ URL::to('icon/check-icon.svg') }}" alt="" class="">
                        <h4 class="text-decoration-none fw-semibold fs-5 py-1 my-0">Keamanan bertransaksi</h4>
                    </div>
                    <p class="py-2 benefit-desc">Pembayaran akan ditahan sampai dengan client merasa puas dengan jasa
                        freelancer. ProyekMuda sepenuhnya bertanggung jawab dalam hal transaksi.</p>
                </div>
            </div>
            <div class="col-lg-4 col-0">
                <div class="d-lg-flex mt-4 d-none">
                    <img src="{{ URL::to('img/benefits-video.png') }}" alt="ProyekMuda Benefits Video">
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container section" id="project">
        <div class="row g-1">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ URL::to('img/card-img.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ URL::to('img/card-img.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ URL::to('img/card-img.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <button class="card" style="width: 18rem;">
                    <img src="{{ URL::to('img/card-img.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </button>
            </div>
        </div>
    </div> --}}
    <div class="bg-freelance position-relative pt-4 pb-5" id="join">
        <img src="{{ URL::to('design/bottom-join.svg') }}" class="position-absolute" alt="">
        <div class="container section">
            <div class="row mt-lg-3 mt-0">
                <div class="col-lg-6 col-12 text-light">
                    <h1 class="h1 font-primary">
                        FreelancerMuda
                    </h1>
                    <h3 class="fw-semibold">by <span class="font-primary fw-bold my-3">ProyekMuda</span></h3>
                    <h4 class="my-3">Solusi cuan mudah untuk <span class="fw-bold fst-italic">Mahasiswa.</span></h4>
                    <div class="d-flex gap-3">
                        <img src="{{ URL::to('icon/check-white-icon.svg') }}" alt="" class="color-white">
                        <h4 class="text-decoration-none fw-semibold fs-5 py-2 my-0">Terbuka untuk seluruh jenjang
                            mahasiswa</h4>
                    </div>
                    <div class="d-flex gap-3">
                        <img src="{{ URL::to('icon/check-white-icon.svg') }}" alt="" class="color-white">
                        <h4 class="text-decoration-none fw-semibold fs-5 py-2 my-0">Kemudahan berkolaborasi</h4>
                    </div>
                    <div class="d-flex gap-3">
                        <img src="{{ URL::to('icon/check-white-icon.svg') }}" alt="" class="color-white">
                        <h4 class="text-decoration-none fw-semibold fs-5 py-2 my-0">Waktu kerja fleksibel</h4>
                    </div>
                    <div class="d-flex gap-3">
                        <img src="{{ URL::to('icon/check-white-icon.svg') }}" alt="" class="color-white">
                        <h4 class="text-decoration-none fw-semibold fs-5 py-2 my-0">Benefit tambahan dari ProyekMuda
                        </h4>
                    </div>
                    <button
                        class="text-success font-secondary bg-white rounded-3 mt-4 fw-bolder font-secondary p-2 border-0">
                        Gabung FreelancerMuda
                    </button>
                </div>
                <div class="col-lg-6 col-0 position-relative my-auto">
                    <img src="{{ URL::to('design/join-left.svg') }}" alt=""
                        class="position-absolute join-left d-lg-flex d-none">
                    <img src="{{ URL::to('design/join-right.svg') }}" alt=""
                        class="position-absolute join-right d-lg-flex d-none">
                    <div
                        class="d-lg-flex justify-content-center align-content-center mt-4 d-none position-relative z-2">
                        <img src="{{ URL::to('img/testi-1.png') }}" alt="Testimoni 1"
                            class="testi-1 position-absolute">
                        <img src="{{ URL::to('img/testi-2.png') }}" alt="Testimoni 2"
                            class="testi-2 position-absolute">
                        <img src="{{ URL::to('img/testi-3.png') }}" alt="Testimoni 3"
                            class="testi-3 position-absolute">
                        <img src="{{ URL::to('img/dummy-project.png') }}" alt="ProyekMuda Testimony project">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cta my-5 pb-5" id="cta">
        <div class="container background rounded-4 container-cta px-5 position-relative">
            <img src="{{ URL::to('design/cta-left.svg') }}" alt=""
                class="position-absolute bottom-0 start-0 d-lg-flex d-none">
            <img src="{{ URL::to('design/cta-right.svg') }}" alt=""
                class="position-absolute top-0 end-0 d-lg-flex d-none">
            <div class="">
                <img src="{{ URL::to('img/freelancer-cta.png') }}" alt="Freelancer ProyekMuda"
                    class="position-absolute bottom-0 freelancer-cta d-lg-flex d-none">
                <img src="{{ URL::to('design/blur-effect.svg') }}" alt=""
                    class="position-absolute bottom-0 end-0">
                <h5 class="position-absolute bottom-0 text-freelancer-cta text-white fw-semibold">Kamado Tanjiro, <span
                        class="fw-normal fs-5">Graphic Designer </span><br>Universitas Negeri Jakarta</h5>
            </div>
            <div class="container mx-5">
                <h1 class="text-white my-2">Tunggu Apalagi?</h1>
                <h2 class="text-white my-2">Gabung <span class="font-primary fw-bold">ProyekMuda</span> sekarang!</h2>
                <button class="btn bg-white color-primary fw-bold font-secondary p-2 my-2">Buat Akun
                    ProyekMuda</button>
            </div>
        </div>
    </div>
    <div class="footer mt-5" id="footer">
        <div class="container">
            <div class="row my-4 d-flex flex-col justify-content-between">
                <div class="col-6">
                    <div class="d-flex gap-3">
                        <img src="{{ URL::to('icon/logo-proyekmuda-footer.svg') }}" alt="Logo ProyekMuda"
                            class="logo">
                        <p class="m-0 p-0 font-primary fw-bold fs-3">ProyekMuda</p>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="d-flex gap-4 d-flex justify-content-end">
                        <a href="">
                            <img src="{{ URL::to('icon/gmail-icon.svg') }}" alt="" class="logo">
                        </a>
                        <a href="">
                            <img src="{{ URL::to('icon/instagram-icon.svg') }}" alt="" class="logo">
                        </a>
                        <p class="m-0 p-0 fs-5">Contact Us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
