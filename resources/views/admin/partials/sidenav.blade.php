<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            @can('manager')
        <div class="sb-sidenav-menu-heading">Users</div>

            <a class="nav-link" href="{{ route('list.contact') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-pen-alt" ></i></div>
                Mesaje utilizatori
            </a>

            @endcan

            <hr class="mx-3">

            <div class="sb-sidenav-menu-heading">Administrare Magazin</div>

            <a class="nav-link" href="{{ route('sections.list') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                Sectiuni
            </a>
            {{-- linkul catre pagina principala pentru categorii--}}
            <a class="nav-link" href="{{ route('categories.list') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                Categorii Produse
            </a>

            {{-- linkul catre pagina principala pentru branduri --}}
            <a class="nav-link" href="{{ route('brands.list') }}" >
                <div class="sb-nav-link-icon"><i class="fas fa-copyright"></i></div>
                 Branduri
            </a>
            {{-- linkul catre pagina principala pentru atributele produselor --}}
            <a class="nav-link" href="{{ route('products.list') }}" >
                <div class="sb-nav-link-icon"><i class="fas fa-shopping-basket"></i></div>
                 Produse
            </a>


        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
        <div class="text-muted">Copyright &copy; Your Website 2020
            <a href="#">Privacy Policy</a>
            &middot;
            <a href="#">Terms &amp; Conditions</a>
        </div>

    </div>
</nav>
