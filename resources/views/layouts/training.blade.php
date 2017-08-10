<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('includes.head')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="light-blue lighten-1" role="navigation">
            @include('includes.navbar')
        </nav>

        @include('includes.header')

        <div class="section section-training">
            <div class="container">
                @yield('content')

                <div class="divider"></div>

                @include('training.pagination')
            </div>
        </div>
        

    </div>

    @include('includes.footer')
    @include('includes.footer-scripts')

</body>
</html>
