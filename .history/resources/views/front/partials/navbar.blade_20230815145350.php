

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="{{ route('home')}}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0"><i class="fa fa-bolt  text-primary me-3"></i>Omiro Tools</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-5" id="navbarCollapse">

        <div class="navbar-nav ms-auto py-3 py-lg-0">
            <a href="{{ route('home')}}" class="nav-item nav-link active">Acasa</a>
            <a href="{{ route('despre')}}" class="nav-item nav-link">Despre</a>
            <a href="{{ route('servicii')}}" class="nav-item nav-link">Servicii</a>
            <a href="{{ route('shop')}}" class="nav-item nav-link">Produse</a>
            <a href="{{ route('contact')}}" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>
