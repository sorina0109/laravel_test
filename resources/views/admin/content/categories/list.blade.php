@extends('admin.template')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Categorii
            </h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('control-panel') }}">Control Panel</a></li>
                <li class="breadcrumb-item active">Categorii</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Lista Categoriilor din Sectiuni

                </div>

                <div class="card-body">

                    @forelse($sections as $section)
                        <div class="card border-secondary m-3 p-2">
                            <div class="card-header bg-primary text-white">
                                {{ $section->name }}
                                <a href="{{ route('categories.new', $section->id) }}"
                                    class="btn btn-warning float-end ms-3">
                                    <i class="fas fa-plus"></i> Adauga Categorie
                                </a>

                                <span class="text-warning float-end fw-bold ">
                                    {{ $section->categories->count() }} Categorii</span>
                            </div>

                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="w-50">Nume / Titlu</th>
                                            <th class="text-center" style="width: 150px;">Foto</th>
                                            <th>Pozitie</th>
                                            <th>Activ / Promo</th>
                                            <th>Actiuni</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($section->categories as $category)

                                            <tr>
                                                <td>{{ $category->name }}<br>{{ $category->title }}</td>
                                                <td class="text-center">
                                                    <img src="{{ $category->photoUrl() }}" width="60" alt="">
                                                </td>
                                                <td>{{ $category->position }}</td>

                                                <td style="width: 220px;">
                                                @livewire('admin.sections-status',['model'=>$category])
                                                </td>

                                                <td style="width: 120px;">
                                                    <a title="Editeaza categorie"
                                                        href="{{ route('categories.edit', $category->id) }}"
                                                        class="btn btn-success btn-sm rounded-circle"><i
                                                            class="fas fa-edit "></i>
                                                    </a>
                                                    <a href="{{ route('categories.photos', $category->id) }}"
                                                        title="adauga galerie foto"
                                                        class="btn btn-primary btn-sm rounded-circle">
                                                        <i class="fas fa-images "></i>
                                                    </a>
                                                  {{--   <button title="Sterge categorie" class="btn btn-danger btn-sm rounded-circle">
                                                        <i class="fas fa-minus-square "></i>
                                                    </button>
                                                    --}}
                                                </td>
                                            </tr>


                                        @empty
                                            <div class="alert alert-warning">
                                                Nu exista Categorii in aceasta Sectiune
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    @empty

                        <div class="alert alert-info">Nu sunt Sectiuni in Baza de Date</div>
                    @endforelse


                </div>
            </div>
        </div>
    </main>

@endsection
