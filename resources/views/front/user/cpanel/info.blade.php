@extends('front.user.cpanel.main')

@section('panel_content')
<div class="row px-xl-5 mt-5 py-5">
    <div class="col-lg-12 pt-5">
        <div class="container-fluid  px-5 py-4 card text-light rounded shadow " style="background-color: #06238a; opacity:0.8;">
            <h1 class="text-center text-primary">
                Informatii cont
            </h1>
            <h3 class="text-center text-light pb-2">
                {{ auth()->user()->name }} | cont <span class="text-primary">{{ auth()->user()->type }}</span>
            </h3>
            <p class="text-light">
                In aceasta sectiune va puteti modifica datele contului, puteti contacta
                administratorii sitului daca intamplinati probleme legate de comenzi, produse sau utilizarea sitului.
            </p>
            {{--<p class="text-light">
                In sectiunea <b>Adrese livrare / facturare</b> puteti adauga una sau mai multe adrese de livrare pentru viitoarele
                comenzi. De asemenea puteti adauga datele unor firme in cazul in care doriti facturarea pe firma a comenzilor.
            </p>--}}
            <p class="text-light">
                In sectiunea <b>Schimbare parola</b> puteti schimba parola pentru contul Dvs, in cazul in care considerati ca este
                nesigura. Va trebui sa introduceti parola curenta iar apoi noua parola pentru resetare.
            </p>
        </div>
    </div>
</div>
@endsection
