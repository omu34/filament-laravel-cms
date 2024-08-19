@props(['messages'])

@if ($messages)
    <span {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>
        @foreach ((array) $messages as $message)
            {{ $message }}
        @endforeach
    </span>
@endif
