@extends('layouts.main')
@section('css', 'css/beranda.css')

<div class="background" id="hero">
    <img src="{{ URL::to('design/top-left-header.svg') }}" alt="" class="design-top">
    @include('partials.navbarLogin')
</div>
<div class="container pt-5">
    <div class="row" style="text-align:center">
        <div class="col-1 d-flex justify-content-center align-items-center prevArrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16" style="top:50%">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg>
        </div>
        <div class="col-10">

            <div class="landing-slider" style="margin:auto auto">
                <div>
                    <img src="{{ URL::to('img/banner.png') }}" style="height:100%;width:100%;" alt="ProyekMuda Benefits Video">
                </div>
                <div>
                    <img src="{{ URL::to('img/banner.png') }}" style="height:100%;width:100%;" alt="ProyekMuda Benefits Video">
                </div>
                <div>
                    <img src="{{ URL::to('img/banner.png') }}" style="height:100%;width:100%;" alt="ProyekMuda Benefits Video">
                </div>
            </div>
        </div>
        <div class="col-1 d-flex justify-content-center align-items-center nextArrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg>
        </div>
    </div>
</div>
<div class="container section" id="benefits">
    <div class="row my-auto">
        <div class="background p-4 rounded" id="hero">
            <!-- <img src="{{ URL::to('design/top-left-header.svg') }}" alt="" class="design-top"> -->
            <!-- <img src="{{ URL::to('img/category.png') }}" style="height:100%;width:100%;" alt="ProyekMuda Category"> -->
            <div class="me-0 gap-4 d-lg-flex d-none justify-content-center align-items-center">
                <button class="btn btn-outline-light rounded-5 px-3 py-2">
                    <span><img src="{{ URL::to('icon/pencil-icon.svg') }}" alt="" class="px-2"></span>
                    Rekomendasi
                </button>
                <div class="btn btn-outline-light rounded-5 px-3 py-2">
                    <span><img src="{{ URL::to('icon/chart-icon.svg') }}" alt="" class="px-2"></span>
                    Digital Design
                </div>
                <div class="btn btn-outline-light rounded-5 px-3 py-2">
                    <span><img src="{{ URL::to('icon/toga-icon.svg') }}" alt="" class="px-2"></span>
                    Pembuatan Website
                </div>
                <div class="btn btn-outline-light rounded-5 px-3 py-2">
                    <span><img src="{{ URL::to('icon/toga-icon.svg') }}" alt="" class="px-2"></span>
                    Pembuatan Aplikasi
                </div>
                <div class="btn btn-outline-light rounded-5 px-3 py-2">
                    <span><img src="{{ URL::to('icon/toga-icon.svg') }}" alt="" class="px-2"></span>
                    Tutor Academic
                </div>
            </div>


        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;" data-toggle="modal" data-target="#detailModal" id="clickModal">
                <img src="{{ URL::to('img/card-img.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Jasa Pembuatan Poster Event (Semua Ukuran)</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ URL::to('img/card-img.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Jasa Pembuatan Website</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ URL::to('img/card-img.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Jasa Pembuatan Poster Event (Semua Ukuran)</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ URL::to('img/card-img.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Jasa Pembuatan Website</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3 mb-4">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ URL::to('img/card-img.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Jasa Pembuatan Poster Event (Semua Ukuran)</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ URL::to('img/card-img.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Jasa Pembuatan Website</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ URL::to('img/card-img.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Jasa Pembuatan Poster Event (Semua Ukuran)</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ URL::to('img/card-img.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Jasa Pembuatan Website</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

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
                <button class="text-success font-secondary bg-white rounded-3 mt-4 fw-bolder font-secondary p-2 border-0">
                    Gabung FreelancerMuda
                </button>
            </div>
            <div class="col-lg-6 col-0 position-relative my-auto">
                <img src="{{ URL::to('design/join-left.svg') }}" alt="" class="position-absolute join-left d-lg-flex d-none">
                <img src="{{ URL::to('design/join-right.svg') }}" alt="" class="position-absolute join-right d-lg-flex d-none">
                <div class="d-lg-flex justify-content-center align-content-center mt-4 d-none position-relative z-2">
                    <img src="{{ URL::to('img/testi-1.png') }}" alt="Testimoni 1" class="testi-1 position-absolute">
                    <img src="{{ URL::to('img/testi-2.png') }}" alt="Testimoni 2" class="testi-2 position-absolute">
                    <img src="{{ URL::to('img/testi-3.png') }}" alt="Testimoni 3" class="testi-3 position-absolute">
                    <img src="{{ URL::to('img/dummy-project.png') }}" alt="ProyekMuda Testimony project">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cta my-5 pb-5" id="cta">
    <div class="container background rounded-4 container-cta px-5 position-relative">
        <img src="{{ URL::to('design/cta-left.svg') }}" alt="" class="position-absolute bottom-0 start-0 d-lg-flex d-none">
        <img src="{{ URL::to('design/cta-right.svg') }}" alt="" class="position-absolute top-0 end-0 d-lg-flex d-none">
        <div class="">
            <img src="{{ URL::to('img/freelancer-cta.png') }}" alt="Freelancer ProyekMuda" class="position-absolute bottom-0 freelancer-cta d-lg-flex d-none">
            <img src="{{ URL::to('design/blur-effect.svg') }}" alt="" class="position-absolute bottom-0 end-0">
            <h5 class="position-absolute bottom-0 text-freelancer-cta text-white fw-semibold">Kamado Tanjiro, <span class="fw-normal fs-5">Graphic Designer </span><br>Universitas Negeri Jakarta</h5>
        </div>
        <div class="container mx-5">
            <h2 class="text-white my-2">Gabung <span class="font-primary fw-bold">ProyekMuda</span> Freelancer</h2>
            <button class="btn bg-white color-primary fw-bold font-secondary p-2 my-2">Daftar Freelancer
                ProyekMuda</button>
        </div>
    </div>
</div>


@include('partials.footer')

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('.landing-slider').slick({
            autoplay: true,
            autoplaySpeed: 2500,
            prevArrow: document.getElementsByClassName('prevArrow'),
            nextArrow: document.getElementsByClassName('nextArrow'),
        });
    });
</script>

<script>
    var myModal = document.getElementById('detailModal')
    var myInput = document.getElementById('clickModal')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    })
</script>