{{-- Tabler theme — admin area --}}
@extends('layout::app')

{{-- Tabler renders the vertical navbar only when <html> asks for it --}}
@section('navbar_position', 'vertical')

@section('main')
    <div class="page">
        @include('layout::includes.admin_sidebar')

        <div class="page-wrapper">
            @include('layout::includes.admin_navbar')

            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <x-rpd::breadcrumbs class="breadcrumb-item" active="active" />
                        </div>
                    </div>
                    @stack('page_header')
                </div>
            </div>

            <div class="page-body">
                <div class="container-xl">
                    @include('layout::includes.messages')

                    @yield('main-content')
                    {{ $slot ?? '' }}

                    @yield('doc')
                </div>
            </div>

            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="text-center text-secondary small">
                        @stack('footer')
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
