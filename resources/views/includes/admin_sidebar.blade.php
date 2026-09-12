{{-- The menu bar under the header (Tabler "navbar-menu"): the modules' menus + search --}}
<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl">
                <div class="row flex-column flex-md-row flex-fill align-items-center">
                    <div class="col">
                        <ul class="navbar-nav">
                            @section('left_sidebar')
                                @foreach(config('rapyd.menus.admin', []) as $menu)
                                    @include($menu)
                                @endforeach
                                @includeIf('menu')
                            @show
                            @yield('role_menu')
                        </ul>
                    </div>
                    <div class="col col-md-auto">
                        @if(config('rapyd.search.enabled', true) && Route::has('search.items'))
                            @livewire('search::search-navbar')
                        @endif
                        @stack('sidebar_footer')
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
