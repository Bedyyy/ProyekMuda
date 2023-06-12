@extends('layouts.main')
{{-- @section('css', 'css/login.css') --}}
<div class="background-primary" style="height:100vh">
    {{-- <img src="{{ URL::to('design/login-left.svg') }}" alt="" class="position-absolute bottom-0 start-0">
    <img src="{{ URL::to('design/login-right.svg') }}" alt="" class="position-absolute top-0 end-0"> --}}
    <a class="btn mt-4 ms-5 fs-3 fw-bold text-white font-secondary" href="/">
        < &nbsp;&nbsp; Back to Dashboard </a>
            <div class="row bg-white my-auto start-50 translate-middle position-absolute rounded-4"
                style="width: 60rem; top:53%;">
                <div class="col-4 m-0 p-0">
                    <img src="{{ URL::to('img/login-img.png') }}" class="object-fit-fill w-100" alt="Project Of The Week"
                        style="object-position: center 0px 0px; ">
                </div>
                <div class="col-8">
                    <h1 class="font-primary color-primary fw-bold text-center mt-3">Welcome to <br>ProyekMuda</h1>
                    <p class="text-muted text-center">Already a member? <a href="/login"
                            class="color-primary fw-bold">Sign In here</a> </p>
                    <div class="container w-75">
                        <form action="">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Full Name"
                                    aria-label="Full Name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Email" aria-label="Email"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Password" aria-label="Password"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Confirm Password"
                                    aria-label="Confirm Password" aria-describedby="basic-addon1">
                            </div>
                            <button class="btn background-primary text-white w-100 rounded-3 fw-semibold mt-4">Sign
                                Up</button>
                        </form>
                        <div class="d-flex gap-3">
                            <button class="btn bg-white color-primary fw-semibold btn-outline-danger w-50">Sign Up
                                with &nbsp;&nbsp;
                                <img src="{{ URL::to('icon/google-icon.svg') }}" alt="">
                            </button>
                            <button class="btn bg-white color-primary fw-semibold btn-outline-danger w-50">Sign Up
                                with &nbsp;&nbsp;
                                <img src="{{ URL::to('icon/meta-icon.svg') }}" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
</div>
