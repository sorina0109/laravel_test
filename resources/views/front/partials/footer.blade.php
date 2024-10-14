<div class="container-fluid bg-dark footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h2 class="text-white mb-4"><i class="fa fa-bolt  text-primary me-3"></i>Omiro Tools</h1>
                <p>Service scule si echipamente electrice, revizie si verificare periodica scule electrice, magazin echipamente electrice.</p>
                {{-- <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-primary me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                </div> --}}
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4">Adresa</h4>
                <p><i class="fa text-primary fa-map-marker-alt me-3"></i> Galati</p>
                <p><i class="fa text-primary fa-phone-alt me-3"></i></p>
                <p><i class="fa text-primary fa-envelope me-3"></i>info@example.com</p>
            </div>
            <div class="col-lg-4 d-none d-lg-block col-md-6">
                <h4 class="text-light mb-4">Acces rapid</h4>
                <a class="btn btn-link" href="{{ route('home') }}">Acasa</a>
                <a class="btn btn-link" href="{{ route('despre') }}">Despre</a>
                <a class="btn btn-link" href="{{ route('servicii') }}">Servicii</a>
                <a class="btn btn-link" href="{{ route('shop') }}">Produse</a>
                <a class="btn btn-link" href="{{ route('contact') }}">Contact</a>
                <a class="btn btn-link" href="{{ route('termeni') }}">T&C</a>
            </div>
           {{-- <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Newsletter</h4>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="{{ route('home')}}">Omiro Tools</a>, All Right Reserved.
                </div>
                {{--<div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                </div>--}}
            </div>
        </div>
    </div>
</div>
