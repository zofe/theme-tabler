{{-- Tabler sidebar dropdown, same props as rpd::nav-dropdown --}}
@props(['icon' => null, 'label' => null, 'route' => null, 'url' => null, 'href' => null, 'click' => null, 'params' => [], 'active' => false])
@php
    $active = item_active($active, $route, $params, $url);
@endphp
<li class="nav-item dropdown {{ $active ? 'active' : '' }}">
    <a class="nav-link dropdown-toggle {{ $active ? 'show' : '' }}" href="#navbar-{{ \Illuminate\Support\Str::slug($label, '-') }}" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ $active ? 'true' : 'false' }}">
        <span class="nav-link-icon d-md-none d-lg-inline-block"><x-rpd::icon :name="$icon"/></span>
        <span class="nav-link-title">{{ $label }}</span>
    </a>
    <div class="dropdown-menu {{ $active ? 'show' : '' }}">
        <div class="dropdown-menu-columns"><div class="dropdown-menu-column">
            {{ $slot }}
        </div></div>
    </div>
</li>
