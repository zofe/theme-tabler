<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-brand navbar-brand-autodark">
            <a href="{{ url('/') }}">{{ config('rapyd.layout.brand') ?: config('app.name', 'Laravel') }}</a>
        </div>

        <div class="navbar-nav flex-row order-md-last align-items-center">
            @stack('right_navbar')
            @guest
                @if(config('rapyd.layout.auth_links', true))
                    @if(Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                    @if(Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @endif
            @else
                @include('layout::includes.user_info_dropdown')
            @endguest
            @include('layout::includes.theme_switcher')
            @include('layout::includes.theme_picker')
        </div>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav">
                @section('left_navbar')
                    @foreach(config('rapyd.menus.frontend', []) as $menu)
                        @include($menu)
                    @endforeach
                @show
                @if(Route::has('admin.home') && Auth::user())
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.home') }}">{{ Auth::user()->hasRole('admin') ? 'Admin' : 'Dashboard' }}</a></li>
                @endif
            </ul>
        </div>
    </div>
</header>
