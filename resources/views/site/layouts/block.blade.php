<!doctype html>
<html lang="en">
<head>
    {!! SEOTools::generate() !!}
    @vite('resources/css/app.css')
</head>
<body>
<div>
    @yield('content')
</div>
</body>
</html>
