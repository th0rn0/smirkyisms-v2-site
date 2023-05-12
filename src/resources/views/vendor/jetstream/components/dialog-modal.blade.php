@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4">
        <div class="text-lg text-indigo-300">
            {{ $title }}
        </div>

        <div class="mt-4 text-gray-300">
            {{ $content }}
        </div>
    </div>

    <div class="px-6 py-4 bg-gray-500 text-right">
        {{ $footer }}
    </div>
</x-jet-modal>
