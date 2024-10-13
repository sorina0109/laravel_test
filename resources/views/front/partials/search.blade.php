<div class="col-lg-6 d-none d-lg-block text-left  pb-2" >
        <form style="display: inline-block;" action="{{ route('search') }}" method="GET" id="search-bar">
            <div class="input-group shadow">
                <input name="search_product" type="text" class="form-control " placeholder="Cauta produs" style="width: 350px;">
                <div class="input-group-append" onclick="document.getElementById('search-bar').submit()"
                        style="cursor:pointer;">
                    <span class="input-group-text bg-dark text-light">
                            <i class="fa fa-search"></i>
                    </span>
                </div>
            </div>
        </form>
    </div>