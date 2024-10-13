@extends('front.template')

@section('meta_title', 'Omiro Tools | Despre Noi')
@section('meta_description', 'Omiro Tools service scule si echipamente electrice, magazin scule si echipamente electrice')
@section('meta_Keywords', 'service scule si echipamente electrice, magazin scule si echipamente electrice')

@section('content')
    <!-- contact Start -->
    <section>
        <div class="container-fluid bg-dark mb-2 pt-5" style="min-height: 150px; ">
            <div class="d-flex flex-column align-items-center justify-content-center" >
                <h2 class="font-weight-semi-bold text-center text-light text-uppercase mb-3 mt-3">Despre</h2>

                <div class="d-inline-flex text-light mb-3  font-weight-semi-bold">
                    <p class="m-0"><a class="text-light 55" href="{{ route('home') }}">Acasa</a></p>
                    <p class="m-0 px-2"> - </p>

                    <p class="m-0"> <span class="text-primary">Despre</span></p>
                </div>

            </div>
		</div>
    </section>


        <div class="container-fluid py-5">
            @include('front.partials.despre-info')
        </div>


    <!-- contact End -->
@endsection

@section('customJs')

@endsection
