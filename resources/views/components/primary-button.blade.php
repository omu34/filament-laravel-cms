<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-brand-green border border-transparent rounded-md text-sm text-white hover:bg-brand-light-green focus:bg-brand-bright-green active:bg-brand-light-green focus:outline-none focus:border-2 focus:border-brand-bright-green transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
