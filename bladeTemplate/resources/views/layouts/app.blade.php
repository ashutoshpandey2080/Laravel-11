<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Push and Stack Example</title>

    {{-- This will print ALL pushed CSS --}}
    @stack('styles')
</head>
<body>

    <h1>Welcome to the App Layout</h1>

    {{-- This will print page-specific content --}}
    @yield('content')

    {{-- This will print ALL pushed scripts --}}
    @stack('scripts')

</body>
</html>
