@props(['id' => null, 'maxWidth' => null, 'background' => null, 'position' => null,])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }} :background="$background" :position="'center'">
    <div class="w-full">
        {{ $content }}
    </div>
</x-modal>