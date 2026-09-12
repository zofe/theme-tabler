@php
    $homeRoute = Route::has('admin.home') ? route('admin.home') : (Route::has('home') ? route('home') : url('/'));
@endphp
<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="{{ $homeRoute }}">
                @if(config('rapyd.layout.logo_sidebar'))
                    <img src="{{ config('rapyd.layout.logo_sidebar') }}" class="navbar-brand-image" alt="{{ config('rapyd.layout.brand') ?: config('app.name') }}">
                @else
                    {{ config('rapyd.layout.brand') ?: config('app.name') }}
                @endif
            </a>
        </div>

        <div class="navbar-nav flex-row order-md-last align-items-center">
            @stack('navbar_right')

            @if(config('app.locales'))
                <div class="nav-item dropdown me-2">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('vendor/rapyd/img/'.app()->getLocale().'.svg') }}" width="15" alt="{{ app()->getLocale() }}">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        @foreach(config('app.locales') as $locale)
                            <a class="dropdown-item" href="{{ url_lang($locale) }}">{{ $locale }}</a>
                        @endforeach
                    </div>
                </div>
            @endif

            @if(Route::has('admin.home') && Route::has('home'))
                <a class="nav-link d-none d-md-flex me-2" href="{{ route('home') }}">{{ __('Home') }}</a>
            @endif

            @include('layout::includes.theme_switcher')

            @guest
                @if(Route::has('login'))
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif
            @endguest
            @auth
                @include('layout::includes.user_info_dropdown')
            @endauth
        </div>
    </div>
</header>
