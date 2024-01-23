@props(['name','route' => ''])
<x-admin-layout>
    @section('title', ucwords($name))
    <div class="px-4 sm:ml-64">
        <x-admin.header :title="$name" :name="'List'" :route="$route"/>
        <div class="bg-white text-slate-900  dark:bg-slate-800 shadow-lg
            border border-slate-200 dark:border-slate-900 px-8 dark:text-slate-100 rounded-lg mx-28 p-5">
            {{ $slot }}
        </div>
    </div>
</x-admin-layout>
