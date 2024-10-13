@extends('front.template')

@section('content')

    <section class="showcase">
            @include('front.partials.showcase')
    </section>

    <section class="" >
        @include('front.partials.servicii')
    </section>

    <section class="my-3">
        @include('front.partials.despre')
    </section>


    <section class="my-3">
        @include('front.partials.caracteristici')
    </section>

    <section class="my-3">
        @include('front.magazin.partials.categories')
    </section>
    <section class="my-3">
        @include('front.magazin.partials.popular')
    </section>

    <section class="my-3">
         @include('front.magazin.partials.brands')
    </section>


    <section class="my-3">
        @include('front.partials.contact')
    </section>



@endsection

@section('customJs')


@endsection
