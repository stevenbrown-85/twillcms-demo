<div class="{{ $block->input('colour') === 'dark' ? 'bg-black' : '' }}">
    <div class="mx-auto py-18 px-6 max-w-5xl">
        <div class="wysiwyg prose max-w-full {{ $block->input('colour') === 'dark' ? 'prose-invert' : '' }}">
            <h2 class="mb-4 text-3xl font-bold">{{$block->translatedInput('title')}}</h2>
            {!! $block->translatedInput('text') !!}
        </div>
    </div>
</div>