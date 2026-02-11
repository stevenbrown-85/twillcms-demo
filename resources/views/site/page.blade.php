<!doctype html>
<html lang="en">
<head>
    <title>Demo page</title>

    @vite('resources/css/app.css')
</head>
<body>
<x-main-nav/> 
<div>
    <div class="mx-auto max-w-2xl">
        {!! $item->renderBlocks() !!}
    </div>
</body>
</html>
