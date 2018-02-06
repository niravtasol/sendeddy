<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.layouts.head')
    @section('pagestyle')
    @show
</head>
<body>
    <header class="header">
        @include('front.layouts.header')
    </header>

    @yield('content')

    @include('front.layouts.footer')

    @section('pagejs')
    @show
</body>
</html>