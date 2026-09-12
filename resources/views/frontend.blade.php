{{-- Tabler theme — public area --}}
@extends('layout::app')

@section('main')
    <div class="page">
        @include('layout::includes.frontend_navbar')

        <div class="page-wrapper">
            <div class="page-body">
                <div class="container-xl">
                    @yield('main-content')
                    {{ $slot ?? '' }}
                </div>
            </div>
        </div>
    </div>
@endsection
