<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include ('layouts.head')
</head>
<body class="g-sidenav-show   bg-gray-100">
    @include ('layouts.sidebar')
    <main class="main-content mt-1 border-radius-lg">
            @include ('layouts.navbar')
            <div class="container">
                @yield('content')
            </div>
    </main>
</body>
@include ('layouts.script')
@yield('scripts')
</html>
