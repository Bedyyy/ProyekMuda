<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        *:focus {
            outline: none !important;
        }

        .background {
            background: radial-gradient(57.36% 71.51% at 78.33% 52.47%, #FA8C5C 0%, #BB4A1A 100%);
            background-repeat: no-repeat;
            background-size: auto;
        }

        .font-primary {
            font-family: 'Rowdies', cursive;
        }

        .font-secondary {
            font-family: 'Poppins', sans-serif;
        }

        .color-primary {
            color: #FB763D;
        }

        .submit-btn {
            background: linear-gradient(180deg, #28E646 0%, #15CA5E 100%);
            height: 3.3rem;
            outline: none !important;
            /* padding-right: 2rem;
            padding-left: 2rem; */
        }

        .poster{
            height: 90%; 
        }

        .search-bar {
            border: none;
            height: 3.8rem !important;
        }

        .search-bar:focus {
            outline: none !important;
            border: none !important;
        }

        .design-top {
            position: absolute;
            top: 0;
            left: 0;
        }

        .design-backdrop-left {
            position: absolute;
            top: -10%;
            right: 0;
        }

        .design-backdrop-right {
            position: absolute;
            bottom: 0;
            left: 0;
        }
    </style>
</head>

<body>
    <div class="background h-100 relative" id="hero">
        <img src="{{ URL::to('design/top-left-header.svg') }}" alt="" class="design-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container px-5 d-flex justify-content-between">
                <a class="navbar-brand font-primary fw-bold fs-3" href="#">ProyekMuda</a>
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
        <div class="container px-5 h-100">
            <div class="row">
                <div class="col-lg-9 col-12 my-auto text-white">
                    <h1 class="fs-1 text-lg-start text-center">Temukan harga jasa <span class="fw-bold">freelance <br class="d-none d-lg-block">
                            termurah</span>, dengan para <br class="d-none d-lg-block"> <span
                            class="font-primary">Freelancer Muda</span>
                    </h1>
                    <form class="d-flex mt-3 w-75 bg-white rounded-3" role="search">
                        <input class="form-control me-2 bg-white search-bar h-25" type="search"
                            placeholder="Cari Proyek..." aria-label="Search">
                        <button
                            class="btn btn-outline-success rounded-3 submit-btn text-white font-secondary fw-bold my-auto me-1 px-5"
                            type="submit">Search</button>
                    </form>
                    <div class="mt-4 me-0 d-flex gap-3">
                        <div class="btn btn-outline-light rounded-5 px-3 py-2">
                            <span><img src="{{ URL::to('icon/pencil-icon.svg') }}" alt="" class="px-2"></span>
                            Digital Design
                        </div>
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
                <div class="col-lg-3 col-0 d-lg-flex d-none me-auto">
                    <div class="card poster text-bg-dark bg-transparent border-0 mt-4">
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
    <div class="vh-100">
        <div class="container">
            <div class="h1 ">h</div>
        </div>
    </div>
</body>

</html>
