<div class="{{ $block->input('colour') === 'dark' ? 'bg-black' : '' }}">
    <div class="flex gap-10 flex-col md:flex-row justify-center items-center mx-auto py-18 px-6 max-w-5xl">
        <div class="md:w-1/2 {{ $block->input('layout') === 'left' ? '' : 'order-last' }}">
            <img src="{{ $block->image('textWithImage', 'image') }}" alt="" class="w-full aspect-square">
        </div>
        <div class="prose md:w-1/2 {{ $block->input('layout') === 'left' ? '' : 'order-first' }}">
            <h2 class="mb-4 text-3xl font-bold {{ $block->input('colour') === 'dark' ? 'text-white' : '' }}">{{$block->translatedInput('title')}}</h2>
            <div class="wysiwyg {{ $block->input('colour') === 'dark' ? 'prose-invert' : '' }}">
                {!! $block->translatedInput('text') !!}
            </div>
        </div>
    </div>
</div>