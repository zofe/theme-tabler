{{-- Tabler page header: title of the current page + breadcrumb trail (shown even for one crumb) --}}
@php
    $breadcrumbs = $generate();
    $last = $breadcrumbs->last();
@endphp
@if($breadcrumbs->count())
<div class="row g-2 align-items-center" wire:ignore>
    <div class="col">
        @if($breadcrumbs->count() > 1)
            <ol class="breadcrumb breadcrumb-arrows mb-1">
                @foreach ($breadcrumbs as $crumbs)
                    @if ($crumbs->url() && !$loop->last)
                        <li class="{{ $class }}"><a href="{{ $crumbs->url() }}">{{ $crumbs->title() }}</a></li>
                    @else
                        <li class="{{ $class }} {{ $active }}" aria-current="page">{{ $crumbs->title() }}</li>
                    @endif
                @endforeach
            </ol>
        @endif
        <h2 class="page-title">{{ $last->title() }}</h2>
    </div>
</div>
@endif
