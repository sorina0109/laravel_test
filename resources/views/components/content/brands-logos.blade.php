<!-- Vendor Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
        <div class="col ">
            
                @foreach ($brands as $brand)
                <a href="{{ route('brands', $brand->slug) }}">
                    <div class="vendor-item border">
                        <img src="{{ $brand->photoUrl() }}" alt="">
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
