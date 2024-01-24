@props(['name','route' => ''])
<x-admin-layout>
    @section('title', ucwords($name))
    <div class="px-4 md:ml-64">
        <x-admin.header :title="$name" :name="'List'" :route="$route"/>
        <div class="container mx-auto flex items-center">
            <div class="bg-white text-slate-900  dark:bg-slate-800 shadow-lg
                border border-slate-200 dark:border-slate-900 px-8 dark:text-slate-100 rounded-lg p-5">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-admin-layout>
