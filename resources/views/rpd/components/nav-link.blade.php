{{-- Tabler: a sidebar sub-item (type="collapse-item") is a dropdown-item, anything else a nav-link --}}
@props(['icon' => null, 'label' => null, 'route' => null, 'url' => null, 'href' => null, 'click' => null, 'params' => [], 'active' => false, 'type' => 'nav-link', 'fromItem' => false])
@php
    $active = item_active($active, $route, $params, $url);
    $href = item_href($route, $params, $url);
    if ($fromItem) { $active = false; }
    $class = $type === 'collapse-item' ? 'dropdown-item' : $type;
    $attributes = $attributes->class([$class, 'active' => $active])->merge(['href' => $href, 'wire:click.prevent' => $click]);
@endphp
<a {{ $attributes }}>
    @if($icon)<span class="nav-link-icon d-md-none d-lg-inline-block"><x-rpd::icon :name="$icon"/></span>@endif
    <span class="nav-link-title">{{ __($label) ?? $slot }}</span>
</a>
