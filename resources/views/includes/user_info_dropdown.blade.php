<div class="nav-item dropdown">
    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
        <span class="avatar avatar-sm" style="background-image: url({{ Auth::user()->avatar ? asset('storage/users/'.Auth::user()->id.'/photos/avatar.jpg') : asset('vendor/rapyd/img/user-account-icon.png') }})"></span>
        <div class="d-none d-xl-block ps-2">
            <div>{{ Auth::user()->name }}</div>
            @if(Auth::user()->company ?? null)
                <div class="mt-1 small text-secondary">{{ Auth::user()->company->business_name }}</div>
            @endif
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        @if(Route::has('profile'))
            <a href="{{ route('profile') }}" class="dropdown-item">{{ __('Profile') }}</a>
        @endif
        @impersonating
            <a href="{{ route('impersonate.leave') }}" class="dropdown-item">{{ __('Leave impersonation') }}</a>
        @endImpersonating
        @yield('user_info_dropdown')
        <div class="dropdown-divider"></div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="dropdown-item" href="#" onclick="this.parentNode.submit();">{{ __('Logout') }}</a>
        </form>
    </div>
</div>
