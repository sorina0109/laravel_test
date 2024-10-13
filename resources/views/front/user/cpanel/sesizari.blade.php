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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Sesizari</h1>
            <form action="" method="POST" style="width:500px;" >
                @csrf
                            <div class="pb-2">
                                <input type="text" class="form-control bg-secondary rounded " placeholder="Nume" id="name" />
                            </div>
                            <div class="pb-2">
                                <input type="text" class="form-control bg-secondary rounded " placeholder="telefon" id="telefon" />
                            </div>
                            <div class="pb-2">
                                <input type="email" class="form-control rounded" placeholder="Email" id="email" />
                            </div>
                            <div class="pb-2">

                                <textarea class="form-control rounded" placeholder="Adauga un comentariu" id="textarea" rows="2"></textarea>
                            </div>
                            <div class="mt-2">
                                <button type="button" class="btn btn-primary rounded"
                                    data-bs-dismiss="modal">Sterge</button>
                                <button type="button" class="btn btn-primary ml-3 rounded">Trimite</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
