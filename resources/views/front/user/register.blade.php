@extends('front.template')

@section('meta_title', 'Creare cont nou')
@section('meta_description', 'Creare cont pentru utilizatorii noi')
@section('meta_keywords', ' new accout, register account')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid pt-5">
        <div class="row justify-content-center pt-5">
            <div class="col-lg-5 pt-5">
                <div class="card text-light shadow rounded-lg my-5" style="background-color: #06238a; opacity:0.8;" >
                    <div class="card-header">
                        <h1 class="text-center text-primary mb-3">Inregistrare cont nou</h1>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Nume utilizator *</label>
                                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Adresa email valida *</label>
                                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="passwords">Parola *</label>
                                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirmare parola *</label>
                                <input name="password_confirmation" type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group py-3">
                                <input type="submit" value="Creaza cont" class="btn btn-info btn-block px-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

@endsection
