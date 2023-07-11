@include('layouts.parts.head')
<body class="{{ str_replace('.', '-', request()->route()->getName()) }}">
<div id="app">
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>