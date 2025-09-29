<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Laravel App' }}</title>
    
</head>
<body>
    @include('layouts.navbar')
    <div class="container">
        @yield('content')
    </div>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>
