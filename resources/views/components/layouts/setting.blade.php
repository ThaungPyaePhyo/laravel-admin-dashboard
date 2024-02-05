@props(['title' => '', 'name' => '' , 'route' => ''])
<div class="px-4 sm:ml-64">
<x-layouts.header :title="$title" :name="$name" />
    {{ $slot }}
</div>

