@extends('front.template')

@section('meta_title', 'Omiro Tools | Servicii')
@section('meta_description', 'Omiro Tools service scule si echipamente electrice, magazin scule si echipamente electrice')
@section('meta_Keywords', 'service scule si echipamente electrice, magazin scule si echipamente electrice')

@section('content')
    <!-- contact Start -->
    <section style="background-image: url('{{ asset("front/img/showcase.jpg") }}'); background-size: cover;" >
        <div class="container-fluid bg-dark mb-2" style=" min-height: 150px; opacity:0.8">
            <div class="d-flex flex-column align-items-center justify-content-center pt-5" >
                <h2 class="font-weight-semi-bold text-center text-light text-uppercase mb-3 mt-3">Servicii</h2>

                <div class="d-inline-flex text-light mb-3  font-weight-semi-bold">
                    <p class="m-0"><a class="text-light 55" href="{{ route('home') }}">Acasa</a></p>
                    <p class="m-0 px-2"> - </p>

                    <p class="m-0"> <span class="text-warning">Servicii</span></p>
                </div>

            </div>
		</div>
    </section>


        <div class="container-fluid py-5">
            @include('front.partials.servicii-info')

        </div>


    <!-- contact End -->
@endsection

@section('customJs')

@endsection
