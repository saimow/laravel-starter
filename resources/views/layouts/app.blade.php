<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

</head>
<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="{{ asset('icons/brand.svg#full') }}"></use>
            </svg>
        </div>

        @include('layouts.navigation')

        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                        onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{ asset('icons/coreui.svg#cil-menu') }}"></use>
                    </svg>
                </button>
                <a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="{{ asset('icons/brand.svg#full') }}"></use>
                    </svg>
                </a>
                <ul class="header-nav d-none d-md-flex">
                    <li class="nav-item"><a class="nav-link" href="">Dashboard</a></li>
                </ul>
                <ul class="header-nav ms-auto">
                    
                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link py-0 show" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                            <div class="avatar avatar-md">
                                <img class="avatar-img" src="/imgs/user.svg" >
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <a class="dropdown-item" href="">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
                                </svg>
                                {{ __('My profile') }}
                            </a>
                            <a class="dropdown-item" href="">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-settings') }}"></use>
                                </svg>
                                {{ __('Settings') }}
                            </a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="">
                                @csrf
                                <a class="dropdown-item" href=""
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                    <svg class="icon me-2">
                                        <use xlink:href="{{ asset('icons/coreui.svg#cil-account-logout') }}"></use>
                                    </svg>
                                    {{ __('Logout') }}
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="header-divider"></div>

            @yield('breadcrumb')

        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div>
                <a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> &copy; 2021 creativeLabs.
            </div>
            <div class="ms-auto">
                Powered by&nbsp;<a href="https://coreui.io/bootstrap/ui-components/">CoreUI UI Components</a>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
    @vite(['resources/js/app.js', 'resources/sass/app.scss', 'resources/sass/style.scss'])

    @stack('scripts')
</body>
</html>
