@extends('admin.template')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sectiuni
            </h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('control-panel') }}">Control Panel</a></li>
                <li class="breadcrumb-item active">Sectiuni</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Lista Sectiunilor - {{ $sections->count() }}


                    <a href="{{ route('sections.new') }}" class="btn btn-success float-end">
                        <i class="fas fa-plus"></i> Adauga Sectiune
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 150px;">Nume</th>
                                <th>Descriere</th>
                                <th class="text-center" style="width: 150px;">Foto</th>
                                <th>Pozitie</th>
                                <th>Activ / Promo</th>
                                <th>Actiuni</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nume</th>
                                <th>Descriere</th>
                                <th class="text-center">Foto</th>
                                <th>Pozitie</th>
                                <th>Activ / Promo</th>
                                <th>Actiuni</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @forelse($sections as $section)
                                <tr>
                                    <td>

                                        @if (isset($section->icon))
                                            <i class="{{ $section->icon }}"></i>
                                        @else
                                            <i class="fas fa-th-list"></i>
                                        @endif
                                        {{ $section->name }}
                                    </td>
                                    <td>
                                        {{ $section->description }}
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ $section->photoUrl() }}" width="60" alt="">
                                    </td>
                                    <td>
                                        {{ $section->position }}
                                    </td>
                                    <td style="width: 220px;">
                                        @livewire('admin.sections-status',['model'=>$section])

                                    </td>

                                    <td style="width: 100px;">
                                        <a title="Editeaza sectiune" href="{{ route('sections.edit', $section->id) }}"
                                            class="btn btn-success btn-sm rounded-circle"><i class="fas fa-edit"></i>
                                        </a>

                                       {{--
                                        <button class="btn btn-danger btn-sm rounded-circle" onclick="">
                                            <i class="fas fa-minus-square"></i>
                                        </button>
                                        --}}
                                    </td>
                                </tr>

                            @empty
                                <div class="alert alert-info">
                                    Nu exista nici o sectiune a sitului
                                </div>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

@endsection



