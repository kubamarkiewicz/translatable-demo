@props(['page'])
<x-filament-fabricator::layouts.base :title="$page->title" :page="$page">
    {{-- Header Here --}}

    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />

    {{-- Footer Here --}}
</x-filament-fabricator::layouts.base>
