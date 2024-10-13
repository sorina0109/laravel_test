@extends('front.template')

@section('meta_title', 'Setari cont')
@section('meta_description',
'setari cont utilizator, resetare parola, adrese livrare, adrese facturare, cupoane
reduceri, comenzi',)
@section('meta_keywords', 'Omiro Tools, setari cont, resetare parola, adaugare adrese, produse favorite, comenzi')

@section('content')

<div class="container-fluid " style="background:transparent;">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-3 col-md-9 mt-5 pt-5" >
            <div class="rounded shadow mt-5 card border-0" style="opacity:0.8;">
                <div class="card-header px-5" style="background-color: #06238a;">
                    <h4>
                        <a href="{{ route('settings') }}" class="text-decoration-none text-primary ">Setari cont</a>
                    </h4>
                </div>
                <div class="card-body" >
                    <ul class="list-group list-group-flush" >
                        {{--<li class="list-group-item">Adrese livrare / facturare</li>
                        <li class="list-group-item">Istoric comenzi</li>--}}
                        <li class="list-group-item"><a href="{{ route('sesizari') }}" class="text-decoration-none" >Mesaje admin</li>
                        <li class="list-group-item"> <a href="{{ route('reset-pass') }}" class="text-decoration-none" >Schimbare parola</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="panel_content col-lg-9 col-md-9 ">
        @include('admin.partials.messages')
        @yield('panel_content')
    </div>
</div>
{{-- end row --}}
</div>
{{-- end container --}}

@endsection
