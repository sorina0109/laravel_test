<!-- Topbar Start -->
<div class="container-fluid p-0">
    <div class="row  d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center px-3">
                <small class="fa text-primary fa-phone-alt me-2"></small>
                <small>0744 635 226</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center px-3">
                <small class="far text-primary fa-envelope-open me-2"></small>
                <small>info@example.com</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center px-3">
                <small class="far text-primary fa-clock me-2"></small>
                <small>Luni - Vineri : 08.30 - 17.30</small>
            </div>
        </div>
        <div class="col-lg-6 d-none d-lg-block text-end pr-5 mr-5 pt-3" >
            <form style="display: inline-block;" action="{{ route('search') }}" method="GET" id="search-bar">
                <div class="input-group shadow-sm " style="width: 350px;">
                    <input name="search_product" type="text" class="form-control " placeholder="Cauta produs" >
                    <div class="input-group-append" onclick="document.getElementById('search-bar').submit()"
                            style="cursor:pointer;">
                        <span class="input-group-text shadow-sm bg-dark text-light">
                                <i class="fa text-primary fa-search p-1"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- Topbar End -->


