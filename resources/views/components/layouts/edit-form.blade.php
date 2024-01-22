@props(['title' => '', 'name' => ''])
<div class="px-4 sm:ml-64">
<x-admin.header :title="$title" :name="'Create'" />
<form action="{{route('products.store')}}" method="POST">
    @csrf
    <div class="bg-white text-slate-900 dark:bg-slate-800 dark:text-white border-gray-200 rounded-lg mx-28 p-5">
        <div class="grid grid-cols-2 content-center gap-4">
            {{ $slot }}
        </div>
    </div>
        <div class="mx-28 my-5">
            <div class="">
                <button type="submit" class="rounded-lg p-2 bg-yellow-500 text-white text-sm font-bold px-4">Create</button>
                <a class="rounded-lg p-2 bg-gray-800 text-white text-sm font-bold px-4" href="{{ route('products.index') }}">Cancel</a>
            </div>
        </div>
</form>
</div>
