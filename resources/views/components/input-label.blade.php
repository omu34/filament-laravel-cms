@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-brand-dark-green hover:text-brand-green']) }}>
    {{ $value ?? $slot }}
</label>
