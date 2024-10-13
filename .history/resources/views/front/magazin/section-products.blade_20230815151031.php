@extends('front.template')

@section('meta_title', $section->meta_title ? $section->meta_title : 'Categorii produse')
@section('meta_description', $section->meta_description ? $section->meta_description : 'Magazin scule si echipamente electrice, categorii produsen')
@section('meta_keywords',
    $section->meta_keywords
    ? $section->meta_keywords
    : 'Magazin scule si echipamente electrice, produsele magazinului, filtrare pret produse, filtrare brand')


@section('content')
<section style="background-image: url('{{ asset("front/img/showcase.jpg") }}'); background-size: cover;" >
    <div class="container-fluid bg-dark mb-2" style=" min-height: 150px; opacity:0.8">
        <div class="d-flex flex-column align-items-center justify-content-center pt-5" >
            <h2 class="font-weight-semi-bold text-center text-light text-uppercase mb-3 mt-3">Produse</h2>

            <div class="d-inline-flex text-light mb-3  font-weight-semi-bold">
            <p class="m-0"><a href="{{ route('home') }}" class="text-light">Acasa</a></p>
                        <p class="m-0 px-2 text-light">-</p>
                        <p class="m-0"><a href="{{ route('shop') }}" class="text-light">Produse</a></p>
                        <p class="m-0 px-2 text-light">-</p>
                        <p class="m-0 text-primary font-weight-semi-bold">{{ $section->name }}</p>
            </div>

        </div>
    </div>
</section>


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
           {{-- <div class="col-lg-3 col-md-12 px-4 pb-5">
                 <!-- Filter start -->
                 <h4 class="font-weight-semi-bold text-dark">Filtreaza:</h4>
                 <div>
                    <form action="{{ route('section.products', ['slug' => $section->slug]) }}" method="GET">
                        @csrf
                        @method('GET')
                        <div class="row mb-2">
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="card border-0 my-2 py-2 pl-2 shadow">
                                    <div class="cart-title">
                                        <h5 class="font-weight-semi-bold p-2 mb-2">Pret</h5>
                                    </div>
                                    <div class="cart-body px-2">
                                        <div class="form-group">
                                            <label for="price_filter p-2">Select max price</label>
                                            <input name="price_filter" type="range" class="form-control-range" id="price_filter"
                                                min="{{ $min_price }}" max="{{ $max_price }}"
                                                onInput="$('#rangeval').html($(this).val())"
                                                value="{{ request('price_filter') ? request('price_filter') : $max_price }}">
                                            <span id="rangeval">{{ request('price_filter') ? request('price_filter') : $max_price }}
                                                <!-- Default value -->
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="card border-0 my-2 py-2 pl-2 shadow">
                                    <div class="cart-title">
                                        <h5 class="font-weight-semi-bold p-2 mb-2">Brand</h5>
                                    </div>
                                    <div class="cart-body p-2">

                                        @csrf
                                        @method('GET')

                                        @forelse($brands as $brand)
                                            <div class="form-check">
                                                <input name="brand_filter[]" class="form-check-input" type="checkbox"
                                                    value="{{ $brand->id }}" id="check-{{ $brand->id }}"
                                                    @if (request('brand_filter')) {{ in_array($brand->id, request('brand_filter')) ? 'checked' : '' }} @endif >
                                                <label class="form-check-label px-2" for="check-{{ $brand->id }} ">
                                                    {{ $brand->name }}
                                                </label>
                                            </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn rounded btn-primary">Filter</button>
                        <a href="{{ route('section.products', $section->slug) }}" class="btn rounded btn-dark">Reset</a>
                    </form>

                </div>
            </div>
        --}}

              <!-- Filter end -->




              <div class="col-lg-12 col-md-6">
                <div class="row pb-3">

                    @forelse($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                            <div class="card bg-white shadow border-0 mb-4">
                                <div class="card-header bg-white  border-0 p-0">

                                    <img class="img-fluid  w-100" src="{{ $product->photoUrl() }}"
                                        alt=""style="height:250px;">
                                </div>
                                <div class="card-body border-0 p-0 pt-4 pb-3">
                                    <div class="p-2">
                                        <h6 class="text mb-3 text-body">{{ $product->name }}</h6>
                                    </div>
                                    <div class="d-flex justify-content-center">

                                        <h6 class="text mb-5 text-primary" >{{ $product->price }} Lei</h6>

                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-between bg-dark">
                                    <h6 class="text mb-3">
                                    <a href="{{ route('product', $product->slug) }}" class="text-decoration-none">
                                        <i class="fas fa-eye text-primary mr-1 pt-2"></i>
                                        <span class="text-center text-muted pb-2">
                                        Vezi detalii</span>
                                    </a>
                                    </h6>
                                </div>
                            </div>
                        </div>

                    @empty
                        <div class="alert alert-info">
                            <h3>Nu au fost gasite produse in aceasta sectiune!</h3>
                        </div>
                    @endforelse
                    <div class="col-12 pb-1">
                        <nav aria-label="Page navigation">
                            {{ $products->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('customJs')


    <script>

        $('#search').keypress((e) => {
            //enter key corresponds to number 13
            if (e.which === 13) {
                $('#search-form').submit();
            }
        });

        $(document).ready(() => {

            // SideNav Button Initialization
            $(".button-collapse").sideNave2();

            // SideNav Scrollbar Initialization
            var sideNavScrollbar = document.querySelector('.custom-scrollbar');
            var ps = new PerfectScrollbar(sideNavScrollbar);
        });

    </script>

<script>

    // display a modal (medium modal)
    $(document).ready(function(){
   $("filterModalSection").modal();
});

</script>


@endsection
