<!-- Shop Start -->
<div class="container-xxl py-3">
    <div class="container">
        <div class="h-100">
            <div class="border-start border-5 border-primary ps-4 mb-5">
                <h6 class="text-body text-uppercase mb-2">Produse</h6>
                <h1 class="display-6 mb-0">Produse recomandate</h1>
            </div>
            <div class="row g-5"> 
                
                @foreach ($trandy_products as $trandy_product)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card bg-white shadow border-0 mb-4">
                            <div class="text-center card-header bg-white border-0">
                                <img class="img-fluid bg-light " src="{{ $trandy_product->photoUrl() }}" alt="" style="height: 250px;">
                            </div>
                            <div class="card-body border-0 p-0 pt-4 pb-3" style="height: 150px;">
                                <h6 class=" mb-3 text-body mx-2">{{ $trandy_product->name }}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6 class="text-primary">{{ $trandy_product->price }} Lei</h6>
                                    
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-dark">
                                <h6>
                                    <a href="{{ route('product', $trandy_product->slug) }}"  class="text-decoration-none">
                                        <i class="fas fa-eye text-primary mr-1 pt-2"></i><span class="text-center text-body pb-2">
                                        Vezi detalii</span>
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Shop End -->