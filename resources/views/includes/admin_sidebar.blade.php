@php
    $homeRoute = Route::has('admin.home') ? route('admin.home') : (Route::has('home') ? route('home') : url('/'));
@endphp
<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-brand navbar-brand-autodark">
            <a href="{{ $homeRoute }}">
                @if(config('rapyd.layout.logo_sidebar'))
                    <img src="{{ config('rapyd.layout.logo_sidebar') }}" class="navbar-brand-image" alt="{{ config('rapyd.layout.brand') ?: config('app.name') }}">
                @else
                    {{ config('rapyd.layout.brand') ?: config('app.name') }}
                @endif
            </a>
        </div>

        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                @section('left_sidebar')
                    @foreach(config('rapyd.menus.admin', []) as $menu)
                        @include($menu)
                    @endforeach
                    @includeIf('menu')
                @show
                @yield('role_menu')
            </ul>

            <div class="mt-auto pt-3">
                @stack('sidebar_footer')
            </div>
        </div>
    </div>
</aside>
