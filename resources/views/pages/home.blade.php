<x-app-layout>
    @foreach($page->sections->sortBy('pivot.order') as $section)
        <livewire:pages.sections :section="$section"/>
    @endforeach
</x-app-layout>