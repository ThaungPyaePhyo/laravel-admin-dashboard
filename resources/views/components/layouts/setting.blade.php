@props(['title' => '', 'name' => '' , 'route' => ''])
<div class="px-4 sm:ml-64">
<x-admin.header :title="$title" :name="$name" />
    {{ $slot }}
</div>

