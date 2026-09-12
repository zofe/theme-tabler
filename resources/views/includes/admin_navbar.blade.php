<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
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

        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                @if(config('rapyd.search.enabled', true) && Route::has('search.items'))
                    <div class="me-3">@livewire('search::search-navbar')</div>
                @endif
                @if(Route::has('admin.home') && Route::has('home'))
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                @endif
            </div>
        </div>
    </div>
</header>
