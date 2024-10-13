<div class="container-xxl py-3">
    <div class="container">
        <div class="h-100">
            <div class="border-start border-5 border-primary ps-4 mb-5 ">
                <h6 class="text-body text-uppercase mb-2">Produse</h6>
                <h1 class="display-6 mb-0">Categorii produse</h1>
            </div>
            <div class="row g-5 "> 
                
                @foreach ($trandy_categories as $trandy_categ)
                <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
                    <div class="card bg-white border-0 shadow mb-4" >
                        <div class="card-header bg-white text-center">
                            <p class="py-2 text-primary m-0"> {{ $trandy_categ->products_count }} Produse</p>
                            <a href="{{ route('category.products', $trandy_categ->slug) }}" >
                                <img class="img-fluid" src="{{ $trandy_categ->photoUrl() }}" alt="" style="height: 200px;">
                            </a>
                        </div>
                        <div class="card-body bg-dark py-4">
                            <a href="{{ route('category.products', $trandy_categ->slug) }}" class="text-decoration-none">
                                <h6 class=" text-body"><i class="fas fa-link text-primary"></i> {{ $trandy_categ->name }}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
 </div>
