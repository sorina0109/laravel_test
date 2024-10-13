@extends('admin.template')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Categorii in sectiunea <span class="text-info">{{ $section->name }}</span>
            </h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('control-panel') }}">Control Panel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('categories.list') }}">Categorii</a></li>
                <li class="breadcrumb-item active">Adauga Categorie pentru
                    <span class="text-info">{{ $section->name }}</span>
                </li>
            </ol>

            <div class="card mb-4 p-4">
                <form action="{{ route('categories.add', $section->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- === randul 1 name slug title --}}
                    <div class="row my-3">
                        <div class="col-md-3">
                            <label for="name" class="form-label">Nume Categorie</label>
                            <input onblur="setSlug()" type="text" name="name"
                                class="form-control @error('name') is-invalid @enderror" id="name"
                                value="{{ old('name') }}" placeholder="Intoduceti numele Categoriei">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="slug" class="form-label">Slug Categorie</label>
                            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror"
                                id="slug" value="{{ old('slug') }}" placeholder="Slug trebuie sa fie unic">
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="title" class="form-label">Titlu Categorie</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="title" value="{{ old('title') }}" placeholder="Descriere scurta a categoriei">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    {{-- <<<=== randul 1 name slug title --}}

                    {{-- <<<=== randul 2 description promo, icon, active, position --}}
                    <div class="row my-3">
                        <div class="col-md-6">

                            <label for="description" class="form-label">Descriere Categorie</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                id="description" value="{{ old('description') }}" rows="3"></textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <label for="position" class="form-label">Pozitie</label>
                            <input name="position" type="number" value="{{ old('position') }}"
                                class="form-control @error('position') is-invalid @enderror" id="position">

                            @error('position')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror


                        </div>

                        <div class="col-md-2">
                            <label for="icon" class="form-label"><i class="fas fa-th-list"></i> Icon
                                (font-awesome)</label>
                            <input name="icon" type="text" class="form-control @error('icon') is-invalid @enderror"
                                id="icon" value="{{ old('icon') }}">

                            @error('icon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-md-1 align-bottom">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="1" name="active" id="active1"
                                    {{ old('active') == 1 ? 'checked' : '' }} @if (is_null(old('active'))) checked @endif>
                                <label class="form-check-label" for="active1">
                                    Activ
                                </label>

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="active" id="active2" value="0"
                                    {{ old('active') === 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="active2">
                                    Inactiv
                                </label>

                            </div>
                            @error('icon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="col-md-1 align-bottom">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="promo" id="promo1" value="0"
                                    {{ old('promo') === 0 ? 'checked' : '' }} @if (is_null(old('promo'))) checked @endif>
                                <label class="form-check-label" for="active1">
                                    Standard
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="promo" id="promo2" value="1"
                                    {{ old('promo') == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="promo2">
                                    Promo
                                </label>
                            </div>
                            @error('promo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>

                    {{-- <<<=== randul 2 description icon promo, active, position --}}

                    {{-- === randul 3 fotografia --}}
                    <div class="row my-3">
                        <div class="col-md-6">
                            <div id="img-preview">
                                <img id="photo-preview" src="/content/categories/category.jpg" alt=""
                                    style="max-width: 200px; max-height:200px; display:inline-block;">
                            </div>
                            <div class="custom-file">
                                <label for="photoFile" class="form-label">Selectati foto Categorie</label>
                                <input class="form-control" value="{{ old('photo') }}" type="file" accept="image/*"
                                    id="photoFile" name="photo">
                            </div>
                            @error('photo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>
                    {{-- <<<=== randul 3 fotografia --}}

                    {{-- ===>>> randul 4 meta tagurile --}}

                    <div class="row mt-5 p-3 bg-light">
                        <div class="col-md-4">
                            <label for="meta_title" class="form-label">Meta titlu</label>
                            <input name="meta_title" type="text"
                                class="form-control @error('meta_title') is-invalid @enderror" id="meta_title"
                                value="{{ old('meta_title') }}">
                            @error('meta_title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="meta_description" class="form-label">Meta descriere</label>
                            <input name="meta_description" type="text"
                                class="form-control @error('meta_description') is-invalid @enderror" id="meta_description"
                                value="{{ old('meta_description') }}">
                            @error('meta_description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="meta_keywords" class="form-label">Meta keywords</label>
                            <input name="meta_keywords" type="text"
                                class="form-control @error('meta_keywords') is-invalid @enderror" id="meta_keywords"
                                value="{{ old('meta_keywords') }}">
                            @error('meta_keywords')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>

                    {{-- <<<=== randul 4 meta tagurile --}}

                    {{-- === randul cu butoanele de return si submit --}}
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <a href="{{ route('categories.list') }}" class="btn btn-dark float-start" type="submit">
                                <i class="fas fa-undo"></i> Return</a>

                            <button class="btn btn-primary float-end" type="submit"> <i class="fas fa-plus"></i>
                                Adauga categorie</button>
                        </div>
                    </div>

                    {{-- === randul cu butoanele de return si submit --}}
                </form>
            </div>
        </div>
    </main>

@endsection

@section('customJs')

    <script>
        const chooseFile = document.getElementById("photoFile");
        const imgPreview = document.getElementById("img-preview");
        chooseFile.addEventListener("change", function() {
            getImgData();
        });
        function getImgData() {
            const files = chooseFile.files[0];
            if (files) {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(files);
                fileReader.addEventListener("load", function() {
                    imgPreview.style.display = "block";
                    imgPreview.innerHTML = '<img src="' + this.result +
                        '" style="max-height:200px; max-width:200px;" class="photo-preview"/>';
                });
            }
        }
    </script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> --}}
    <script>
        function setSlug() {
            var theTitle = document.getElementById("name").value.toLowerCase().trim();
            var theSlug = theTitle.replace(/&/g, '-and-')
                .replace(/[^a-z0-9-]+/g, '-')
                .replace(/\-\-+/g, '-')
                .replace(/^-+|-+$/g, '');
            document.getElementById("slug").value = theSlug;
        }
    </script>

    {{-- ckeditor scripts --}}
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace('description');
    </script>


@endsection
