@extends('front.template')

@section('meta_title', 'Omiro Tools')
@section('meta_description', 'Cautare produse Omiro Tools')
@section('meta_Keywords', 'Produse Omiro Tools, filtrare dupa marca,  filtrare dupa nume, filtrare dupa descriere')

@section('content')
<section style="background-image: url('{{ asset("front/img/showcase.jpg") }}'); background-size: cover;" >
    <div class="container-fluid bg-dark mb-2" style=" min-height: 150px; opacity:0.8">
            <div class="d-flex flex-column align-items-center justify-content-center pt-5" >
                <h2 class="font-weight-semi-bold text-center text-light text-uppercase mb-3 mt-3">Rezultatul cautarii</h2>

                <div class="d-inline-flex text-light mb-3  font-weight-semi-bold">
                    <p class="m-0"><a class="text-light 55" href="{{ route('home') }}">Acasa</a></p>
                    <p class="m-0 px-2"> - </p>
                    <p class="m-0 text-primary">Produse gasite ({{ $products->total() }})</p>
                </div>

            </div>
		</div>
</section>

<div class="container-xxl py-5">
    <div class="container">
        <div class="col-lg-12">
            <div class="row pb-3">
                @forelse($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-6 pb-1">

                    <div class="card border-0 shadow mb-4">
                        <div class="card-header position-relative overflow-hidden bg-transparent border-0 p-0">
                            <img class="img-fluid py-2 w-100" src="{{ $product->photoUrl() }}"
                                alt=""style="height:250px;">
                        </div>
                        <div class="card-body border-0 p-0 my-2" style="height: 150px;">
                            <div class="p-2">
                                <h6 class="text mb-3 text-body">{{ $product->name }}</h6>

                            </div>
                            <div class="d-flex justify-content-center">
                                <h6 class="text-primary ">{{ $product->price }}</h6>
                            </div>

                        </div>
                        <div class="card-footer d-flex justify-content-between bg-dark border-0">
                            <h6>
                                <a href="{{ route('product', $product->slug) }}" class="text-decoration-none">
                                    <i class="fas fa-eye text-primary  mr-1 pt-2"></i><span
                                        class="text-center text-light pb-2">
                                        Vezi detalii</span>
                                </a>
                            </h6>


                        </div>
                    </div>
                </div>
                @empty
                    <div class="alert alert-info">
                        <h3>Nu au fost gasite produse!</h3>
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

@endsection

@section('customJs')

<script>
$('#search').keypress((e) => {
//enter key corresponds to number 13
if (e.which === 13) {
    $('#search-form').submit();
}
});

</script>

@endsection
