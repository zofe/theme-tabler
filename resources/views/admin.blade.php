{{-- Tabler theme — admin area, the horizontal layout of the official preview:
     header (brand, user), menu bar (modules' menus, search), page header, content --}}
@extends('layout::app')

@section('main')
    <div class="page">
        @include('layout::includes.admin_navbar')
        @include('layout::includes.admin_sidebar')

        <div class="page-wrapper">
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <x-rpd::breadcrumbs class="breadcrumb-item" active="active" />
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
