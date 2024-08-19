@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-brand-green focus:border-brand-light-green focus:border-brand-bright-green rounded-md shadow-sm']) !!}>
