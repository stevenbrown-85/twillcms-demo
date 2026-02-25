<picture>
    <source media="(max-width: 450px)" srcset="{{ $block->image('fullWidthImage', 'mobile') }}">
    <source media="(min-width: 451px)" srcset="{{ $block->image('fullWidthImage', 'desktop') }}">
    <img src="{{ $block->image('fullWidthImage', 'desktop') }}" alt="" class="w-full">
</picture>
