@include('layouts.parts.head')
<body class="{{ str_replace('.', '-', request()->route()->getName()) }}">
    <div id="app">
    @include('layouts.parts.nav')
    @include('layouts.parts.preloader')

    <main class="py-4">
        @yield('content')
    </main>

    @include('layouts.parts.footer-scripts')
    @include('layouts.parts.footer')
    </div>
</body>
</html>