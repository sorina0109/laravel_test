
<a class="btn px-xl-5 d-flex align-items-center justify-content-between w-100"
    data-toggle="collapse" href="#navbar-vertical">
    <h6 class="m-0 p-3 text-light font-weight-semi-bold text-uppercase">Sectiuni produse</h6>
    <i class="fa fa-angle-down text-light"></i>
</a>
<nav class="collapse {{ $showMenu == 1 ? 'show' : '' }}   position-absolute navbar navbar-vertical navbar-secondary w-100 align-items-start bg-light "
    id="navbar-vertical" style="z-index: 20; widith:auto;">

<div class="navbar-nav px-xl-5 w-100 overflow-hidden">

   {{--
    @forelse($sections_menu as $section)
        <div class="nav-item nav-link ">

            <a href="{{ route('section.products', $section->slug) }}" class="text-decoration-none text-info" >
                <i class="{{ $section->icon ? $section->icon : 'fas fa-th-list' }} mr-1"></i>{{ $section->name }} ({{ $section->products_count }})
            </a>
        </div>

    @empty
        <p> No sections in site </p>
    @endforelse

    --}}

    @forelse($sections_menu as $section)
        <div class="nav-item dropdown">
            <a href="{{ route('section.products', $section->slug) }}" class="nav-link dropdown-toggle" data-toggle="dropdown">
               {{-- <i class="{{ $section->icon ? $section->icon : 'fas fa-th-list' }} mr-1">
                </i> --}} {{ $section->name }}
            </a>
            @foreach($section->categories as $category )

                <div class="dropdown-menu border-0">
                    <a href="{{ route('category.products', $category->slug) }}"  class="dropdown-item">
                        <i class="fas fa-ellipsis-h"></i> {{ $category->name }}
                </a>

                </div>

            @endforeach

        </div>

    @empty
        <p> No sections in site </p>
    @endforelse

</div>
</nav>

