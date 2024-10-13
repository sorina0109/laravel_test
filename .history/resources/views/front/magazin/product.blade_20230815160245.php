@extends('front.template')
@section('meta_title', $product->meta_title ? $product->meta_title : 'Detalii produs')
@section('meta_description', $product->meta_description ? $product->meta_description : 'Magazin scule si echipamente electrice, detalii produs')
@section('meta_keywords',
    $product->meta_keywords
    ? $product->meta_keywords
    : 'Magazin scule si echipamente electrice, detalii produs')

@section('content')
    <!-- Page Header Start -->
<section style="background-image: url('{{ asset("front/img/showcase.jpg") }}'); background-size: cover;" >
    <div class="container-fluid bg-dark mb-2" style=" min-height: 150px; opacity:0.8">
        <div class="d-flex flex-column align-items-center justify-content-center pt-5" >


            <div class="d-inline-flex text-light mb-3  font-weight-semi-bold">
                <p class="m-0"><a href="{{ route('home') }}" class="text-light">Acasa</a></p>
                <p class="m-0 px-2 text-light">-</p>
                <p class="m-0"><a href="{{ route('shop') }}" class="text-light">Produse</a></p>
                <p class="m-0 px-2 text-light">-</p>
                    <p class="m-0 text-primary font-weight-semi-bold">{{ $category->name }}</p>
            </div>

        </div>
    </div>
</section>

 <!-- Shop Detail Start -->
 <div class="container-xxl py-5">
        <div class="row pb-3">
            <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="card border-0 p-0">
                        <img class="text-center w-100" src="{{ $product->photoUrl() }}" alt="{{ $product->name }}" >
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-6 my-5">
                <div class="text-dark ">
                    <h2 class="font-weight-semi-bold text-uppercase mb-3 mt-3">{{ $product->name }} </h2>
                    <h3 class="font-weight-semi-bold mb-4 text-primary">{{ $product->price }} Lei</h3>
                    <p class="text-body"><span class="text-dark">Etichete: </span> {{  $product->meta_keywords }}</p>
            </div>
        </div>
    </div>

    <div class="row ">
            <div class="col text-dark">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active text-uppercase" id="nav-descriere-tab" data-toggle="tab" href="#nav-descriere" role="tab"
                            aria-controls="nav-descriere" aria-selected="true"><h6>Descriere produs</h6></a>
                        <a class="nav-item nav-link text-uppercase" id="nav-detalii-tab" data-toggle="tab" href="#nav-detalii" role="tab"
                            aria-controls="nav-detalii" aria-selected="false"><h6>Detalii tehnice</h6></a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade text-body show active pt-2" id="nav-descriere" role="tabpanel" aria-labelledby="nav-descriere-tab">
                        {!! $product->excerpt !!}
                    </div>
                    <div class="tab-pane fade text-body pt-2" id="nav-detalii" role="tabpanel" aria-labelledby="nav-detalii-tab">
                        {!! $product->presentation !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

        {{-- end second row --}}



@endsection

@section('customJs')

    <script>
        $('#nav-tab a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>

@endsection
