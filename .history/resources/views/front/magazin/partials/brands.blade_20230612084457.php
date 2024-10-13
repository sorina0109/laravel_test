 <!-- Vendor Start -->
    <div class="col-lg-12">
        <div class="row g-3">
            @foreach ($brands as $brand)
            <div class="col-lg-3 col-md-6 d-none d-md-block">
                <img class="img-fluid py-2" src="{{ $brand->photoUrl() }}" alt="max-width:150px; max-height:100px;">
            </div>
            @endforeach
        </div>
    </div>
    
<!-- Vendor End -->
