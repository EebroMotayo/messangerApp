<!DOCTYPE html>
<html lang="en">
<head>
    @include('apps.layout.head')
    @yield('styles')
</head>

<body class="sidebar-noneoverflow">

    <div class="header-container fixed-top">
        @include('apps.layout.main_header')
    </div>

    <div class="sub-header-container">
        @yield('header')
    </div>
    <div class="main-container sidebar-closed sbar-open" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                @yield('main-content')
            </div>

            <div class="footer-wrapper">
                @include('apps.layout.footer')
            </div>
        </div>
    </div>



    @include('apps.layout.scripts')

    @yield('scripts')

</body>
</html>
