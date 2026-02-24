<!doctype html>
<html lang="en">
<head>
    <title>Twill Demo</title>

    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    @vite('resources/css/app.css')
</head>
<body>
    <x-main-nav/> 

    @if($item->hasImage('banner_image', 'desktop'))
    <div class="w-full">
        <div class="relative h-screen bg-black">
            <img src="{{ $item->image('banner_image', 'desktop') }}" alt="" class="object-cover w-full h-full aspect-video opacity-75">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white max-w-200 mx-auto">
                <h2 class="text-sm uppercase tracking-wide">{{ $item->banner_pretitle }}</h2>
                <h1 class="text-4xl font-bold">{{ $item->banner_title }}</h1>
                <p class="mt-4 text-lg">{{ $item->banner_strapline }}</p>
            </div>
        </div>
    </div>
    @endif

    {!! $item->renderBlocks() !!}

</body>
</html>
