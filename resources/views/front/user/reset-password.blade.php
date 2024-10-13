@extends('front.template')

@section('meta_title', 'Resetare parola')
@section('meta_description', 'Cerere resetare parola utilizator')
@section('meta_keywords', 'Omiro Tools, login accout, register account')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 rounded shadow text-light align-items-center p-5 justify-content-center mt-5" style="background-color: #06238a; opacity:0.8;" >
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Cerere link resetare parola</h1>
            <form style="width:500px;" action="{{ route('password.email') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email">Adresa email cont *</label>
                    <input name="email" type="email" class="form-control  @error('email') is-invalid @enderror" id="email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="form-group mb-0">
                    <input type="submit" value="Link resetare parola" class="btn btn-primary btn-block px-3">
                </div>
            </form>

            @php
                if (session('status')) {
                    alert()
                        ->success('Linkul a fost trimis', session('status'))
                        ->persistent(true, false);
                }
            @endphp
            {{ session('status') }}


            @error('email')
                @php
                    alert()
                        ->error('Eroare', $message)
                        ->persistent(true, false);
                @endphp
            @enderror

        </div>
        <div class="col-lg-3"></div>
        </div>
    </div>

    <!-- Page Header End -->

@endsection
