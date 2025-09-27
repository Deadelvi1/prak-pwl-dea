<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Laravel App' }}</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
