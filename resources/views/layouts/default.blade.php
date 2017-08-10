<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>


    <nav class="light-blue lighten-1" role="navigation">
        @include('includes.header')
    </nav>

    @yield('content')

    @include('includes.footer')
    @include('includes.footer-scripts')


</body>
</html>