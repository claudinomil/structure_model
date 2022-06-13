<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title> @yield('page_title') | Structure Model - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.png') }}">
        @include('layouts.head-css')
    </head>

    @section('body')
        @if(Auth::user()->layout_style == 1) <body data-sidebar="dark"> @endif
        @if(Auth::user()->layout_style == 2) <body data-sidebar="dark" data-sidebar-size="small"> @endif
        @if(Auth::user()->layout_style == 3) <body data-sidebar="dark" data-keep-enlarged="true" class="vertical-collpsed"> @endif
        @if(Auth::user()->layout_style == 4) <body data-sidebar="dark" data-keep-enlarged="true" class="vertical-collpsed" data-layout-size="boxed"> @endif
        @if(Auth::user()->layout_style == 5) <body data-sidebar="dark" data-layout-scrollable="true"> @endif
        @if(Auth::user()->layout_style == 6) <body data-topbar="dark" data-layout="horizontal"> @endif
        @if(Auth::user()->layout_style == 7) <body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed"> @endif
        @if(Auth::user()->layout_style == 8) <body data-topbar="dark" data-layout="horizontal" data-layout-scrollable="true"> @endif

        @show

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner-chase">
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="layout-wrapper">
            <!-- Sidebar -->
            @if(Auth::user()->layout_menu == 1)
                @include('layouts.topbar')
                @include('layouts.sidebar')
            @endif

            <!-- Layout Horizontal -->
            @if(Auth::user()->layout_menu == 2)
                @include('layouts.horizontal')
            @endif

            <!-- Settings User -->
            @include('layouts.settings-user')

            <!-- Start right Content here -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>

                @include('layouts.footer')
            </div>
        </div>

        <!-- Right Sidebar -->
        @include('layouts.right-sidebar')

        <!-- javascript -->
        @include('layouts.vendor-scripts')

    </body>
</html>
