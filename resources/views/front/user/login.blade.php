@extends('front.template')

@section('meta_title', 'Logare utilizator')
@section('meta_description', 'Logare utilizatori pe situl e-mag online shopping')
@section('meta_keywords', 'Omiro Tools, login accout, register account')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid pt-5">
        <div class="row justify-content-center pt-5">
            <div class="col-lg-5 pt-5">
                <div class="card text-light shadow rounded-lg my-5" style="background-color: #06238a; opacity:0.8;" >
                    <div class="card-header">
                        <h1 class="text-center text-primary mb-3">Logare in cont</h1>
                        <form  action="{{ route('login') }}" method="POST">
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
                            <div class="form-group">
                                <label for="password">Parola *</label>
                                <input name="password" type="password" class="form-control  @error('password') is-invalid @enderror"
                                    id="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group py-3">
                                <input type="submit" value="Login" class="btn btn-info btn-block px-3">
                            </div>
                        </form>
                    </div>
                    <div class="m-3 text-center">
                        <a href="{{ route('password.request') }}">V-ati uitat parola contului? Otineti o noua parola</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

@endsection
