@extends('front.template')

@section('meta_title', 'Verificare email')
@section('meta_description', 'Cerere verificare email')
@section('meta_keywords', 'Omiro Tools, verificare email utilizator curent')

@section('content')
    <div class="container-fluid px-xl-5 py-5">
        <div class="row mt-5 pt-5">
            <div class="col-lg-3"></div>
        <div class="col-lg-6 rounded shadow text-light align-items-center p-5 justify-content-center mt-5" style="background-color: #06238a; opacity:0.8; min-height: 300px">
            <h1 class="text-center text-primary mb-3">Validare cont utilizator</h1>
            <p>
                Nu puteti accesa aceasta sectiune a sitului fara a avea emailul validat. Va rugam apasati butonul de mai jos
                pentru a primi un email cu un link de validare a contului.
            </p>
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div class="form-group mb-0">
                    <input type="submit" value="Trimite email validare" class="btn btn-primary btn-block ">
                </div>

            </form>
            @if (session('status') == 'verification-link-sent')
                <div class="my-4 font-medium text-center text-sm text-success">
                    A fost trimis un nou email la adresa {{ auth()->user()->email }} pentru validarea contului
                </div>
            @endif
        </div>
        <div class="collg-3"></div>
        </div>
    </div>

@endsection
