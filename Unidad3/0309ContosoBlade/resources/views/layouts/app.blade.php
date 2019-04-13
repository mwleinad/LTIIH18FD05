<html lang="en">
@include('layouts.head');
<body>
    @include('layouts.nav');
    <main role="main">
        @yield('content')
    </main>
    @include('layouts.footer');
</body>
</html>