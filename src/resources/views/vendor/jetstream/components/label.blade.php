@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-indigo-300']) }}>
    {{ $value ?? $slot }}
</label>
