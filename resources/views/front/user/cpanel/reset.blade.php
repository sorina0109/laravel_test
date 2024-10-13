@extends('front.user.cpanel.main')

@section('panel_content')
<div class="container-fluid ">
    <div class="row justify-content-center pt-5">
        <div class="col-lg-8 pt-5">
            <div class="card text-light shadow rounded-lg my-5" style="background-color: #06238a; opacity:0.8;" >
                <div class="card-header">
                    <h2 class="text-center text-primary py-2">
                        Resetare parola cont -  {{ auth()->user()->name }}
                    </h2>

                    <p class="text-light px-xl-5">
                        Va puteti schimba parola curenta daca considerati ca nu mai este adecvata utilizarii acestui cont.<br>
                        Introduceti parola curenta, apoi noua parola si confirmati aceasta noua parola.
                    </p>

                    <div class="card-body mx-auto w-75 align-item-center justify-content-center" >
                        <form  action="{{ route('change-pass') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="current_pass">Parola actuala*</label>
                                <input name="current_pass" type="text" class="form-control @error('current_pass') is-invalid @enderror"
                                    id="current_pass">
                                @error('current_pass')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="newpassword">Noua parola *</label>
                                <input name="newpassword" type="password" class="form-control @error('newpassword') is-invalid @enderror"
                                    id="newpassword">
                                @error('newpassword')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="newpassword_confirmation">Confirmare noua parola *</label>
                                <input name="newpassword_confirmation" type="password"
                                    class="form-control @error('newpassword_confirmation') is-invalid @enderror"
                                    id="newpassword_confirmation">
                                @error('newpassword_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group py-3">
                                <input type="submit" value="Reseteaza parola" class="btn btn-primary btn-block px-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
