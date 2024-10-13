<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5" >
            <div class="col-lg-5 col-md-6">
                <div class="border-start border-5 border-primary ps-4 mb-5 wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="text-muted text-uppercase mb-2">Contact</h6>
                    <h1 class="display-6 text-dark mb-0">Oricand alaturi de tine</h1>
                </div>
                <p class="text-muted mb-0">Te rugam sa ne contactezi direct la sediul firmei sau completeaza formularul de contact pentru orice fel de informatie.</p>
            </div>
            <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                        Session::forget('success');
                        @endphp
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6 pb-1">
                            <div class="form-floating">
                                <strong>Nume:</strong>
                                <input type="text" class="form-control bg-dark border-0" id="name" name="name"  placeholder="Nume" value="{{ old('name') }}"
                                    required="required">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                             </div>
                        </div>
                        <div class="col-sm-6 pb-1">
                            <div class="form-floating">
                                <strong>Telefon:</strong>
                                <input type="phone" name="phone" class="form-control bg-dark border-0" placeholder="Telefon" value="{{ old('phone') }}"
                                    required="required">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6 pb-1">
                            <div class="form-floating">
                                <strong>Email:</strong>
                                <input type="email" class="form-control bg-dark border-0" name="email" value="{{ old('email') }}"
                                    required="required" >
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6 pb-1">
                            <div class="form-floating">
                                <strong>Subiect:</strong>
                                <input type="text" name="subject" class="form-control bg-dark border-0" placeholder="Subiect" value="{{ old('subject') }}"
                                    required="required">
                                @if ($errors->has('subject'))
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12 pb-3">
                            <div class="form-floating">
                                <strong>Mesaj:</strong>
                                <textarea name="message" rows="2" class="form-control bg-dark border-0" required="required">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Trimite</button>
                        </div>
                    </form>


              {{--  <form>
                    <div class="row g-3">
                        <div class="col-sm-6 ">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-dark border-0" id="gname" placeholder="Gurdian Name">
                                <label for="gname">Nume</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control bg-dark border-0" id="gmail" placeholder="Gurdian Email">
                                <label for="gmail">Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-dark border-0" id="cname" placeholder="Child Name">
                                <label for="cname">Mobile</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-dark border-0" id="cage" placeholder="Child Age">
                                <label for="cage">Tip serviciu</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control bg-dark border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Trimite</button>
                        </div>
                    </div>
                </form> --}}
            </div>
        </div>
    </div>
</div>

{{--

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
    @endif

    <form method="POST" action="{{ route('contact.store') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-6 ">
                <div class="form-floating">
                    <input type="text" class="form-control bg-dark border-0" id="name" name="name"  placeholder="Nume" value="{{ old('name') }}"
                        required="required">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                 </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating">
                    <input type="phone" name="phone" class="form-control bg-dark border-0" placeholder="Telefon" value="{{ old('phone') }}"
                        required="required">
                    @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-floating">
                    <input type="email" class="form-control bg-dark border-0" id="email" name="email" value="{{ old('email') }}"
                        required="required" >
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-floating">
                    <input type="text" name="subject" class="form-control bg-dark border-0" placeholder="Subiect" value="{{ old('subject') }}"
                        required="required">
                    @if ($errors->has('subject'))
                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-floating">
                    <textarea name="message" id="message" rows="3" class="form-control bg-dark border-0" required="required">{{ old('message') }}</textarea>
                    @if ($errors->has('message'))
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Trimite</button>
            </div>
        </form>
--}}



