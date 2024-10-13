<div class="container-xxl py-2">
    <div class="container">
        <div class="row g-5">
            @forelse ($sections as $section)
            {{-- ===>>> afisam cateogriile sectiunii --}}
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card  shadow rounded  border-0 mb-4" style="height:300px;">
                    <div class="text-center card-header border-0">
                        <a href="{{ route('section', $section->slug) }}"><img class="img-fluid w-100"
                            src="{{ $section->photoUrl() }}" alt="{{ $section->name }}"
                            title="{{ $section->name }}" style="height:200px;"></a>
                     </div>
                    <div class="card-body border-left border-0 text-center p-0 pt-4 pb-3">
                        <a href="#"  class="text-decoration-none">

                        <h6 class="text-truncate mb-3 text-dark mx-2">{{ $section->name }}</h6>
                        </a>
                    </div>
                </div>
            </div>

            {{-- <<<=== afisam cateogriile sectiunii --}}
            @empty
                <div class="alert alert-warning">
                    <h3>No categories for this section!</h3>
                </div>
            @endforelse

    </div>
 </div>
