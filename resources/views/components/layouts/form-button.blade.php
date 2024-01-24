@props(['route','name'])
<div class="container mx-auto mt-5">
    <button type="submit" class="rounded-lg p-2 bg-yellow-500 text-white text-sm font-bold px-4">{{ $name }}</button>
    <a class="rounded-lg p-2 bg-gray-800 text-white text-sm font-bold px-4" href="{{ $route }}">Cancel</a>
</div>
