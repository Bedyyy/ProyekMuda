<nav class="navbar navbar-expand-lg navbar-dark bg-transparent z-3">
    <div class="container d-flex justify-content-between">
        <div class="d-flex gap-3">
            <img src="{{ URL::to('icon/logo-proyekmuda.svg') }}" alt="" class="logo">
            <a class="navbar-brand font-primary fw-bold fs-3" href="#">ProyekMuda</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 grid gap-lg-4 gap font-secondary fw-bold">
                <li class="nav-item">
                    <a class="nav-link fw-bold" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cari Proyek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login" tabindex="-1" aria-disabled="true">Sign In</a>
                </li>
                <li class="nav-item bg-white rounded-5 px-4">
                    <a class="nav-link color-primary" href="/register" tabindex="-1" aria-disabled="true">Join</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
