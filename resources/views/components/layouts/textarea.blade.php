@props(['name'])
<div>
    <label>Description</label>
    <textarea name="{{ $name }}" class="bg-white dark:bg-slate-700 border border-slate-500 rounded-xl w-full">
        {{ $slot ?? old($name) }}
    </textarea>
</div>
