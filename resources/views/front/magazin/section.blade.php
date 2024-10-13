@extends('front.template')

@section('meta_title', 'Omiro Tools | Produse')
@section('meta_description', 'Omiro Tools service scule si echipamente electrice, magazin scule si echipamente electrice')
@section('meta_Keywords', 'service scule si echipamente electrice, magazin scule si echipamente electrice')


@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-5" >
            <div class="d-inline-flex mb-2">
                <p class="m-0"><a href="{{ route('home') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
               
                    </a>
                </p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid pt-5">
        <div class="row px-xl-5">


            <div class="col-lg-12 col-md-6">
                <div class="row pb-3">
                    @forelse ($sections as $section)
                        {{-- ===>>> afisam cateogriile sectiunii --}}
                        <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                            <div class="card bg-white product-item border-0 mb-4">
                                <div
                                    class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <a href="{{ route('section', $section->slug) }}"><img class="img-fluid w-100"
                                            src="{{ $section->photoUrl() }}" alt="{{ $section->name }}"
                                            title="{{ $section->name }}"></a>
                                </div>

                            </div>
                        </div>
                        {{-- <<<=== afisam cateogriile sectiunii --}}
                    @empty
                        <div class="alert alert-warning">
                            <h3>No categories for this section!</h3>
                        </div>
                    @endforelse



                </div>
            </div>

        </div>


@endsection
