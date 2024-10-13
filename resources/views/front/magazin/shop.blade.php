@extends('front.template')

@section('meta_title', 'Omiro Tools | Produse')
@section('meta_description', 'Omiro Tools service scule si echipamente electrice, magazin scule si echipamente electrice')
@section('meta_Keywords', 'service scule si echipamente electrice, magazin scule si echipamente electrice')



@section('content')
<section style="background-image: url('{{ asset("front/img/showcase.jpg") }}'); background-size: cover;" >
    <div class="container-fluid bg-dark mb-2" style=" min-height: 150px; opacity:0.8">
        <div class="d-flex flex-column align-items-center justify-content-center pt-5" >
            <h2 class="font-weight-semi-bold text-center text-light text-uppercase mb-3 mt-3">Categorii produse</h2>

            <div class="d-inline-flex text-light mb-3  font-weight-semi-bold">
                <p class="m-0"><a class="text-light 55" href="{{ route('home') }}">Acasa</a></p>
                <p class="m-0 px-2"> - </p>

                <p class="m-0"> <span class="text-warning">Categorii</span></p>
            </div>

        </div>
    </div>
</section>
 <!-- Shop Start -->

 <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            @foreach ($categories as $category)
            <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
                <div class="card product-item border-0 shadow mb-4" >
                    <div class="card-header bg-white  text-center">
                        <p class="py-2 text-primary "> {{ $category->products_count }} Produse</p>
                        <a href="{{ route('category.products', $category->slug) }}" >
                            <img class="img-fluid " src="{{ $category->photoUrl() }}" alt="" style="height: 200px;">
                        </a>
                    </div>
                    <div class="card-body bg-dark py-4">
                        <a href="{{ route('category.products', $category->slug) }}" class="text-decoration-none">
                        <h5 class=" text-body"><i class="fas fa-link text-primary"></i> {{ $category->name }}</h5>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

            @include('front.magazin.partials.brands')


        </div>
    </div>
 </div>

        <!-- Shop Product End -->

<!-- Shop End -->

@endsection
