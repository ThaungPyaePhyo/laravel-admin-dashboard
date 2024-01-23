@props(['disabled' => false,'name' => '',])
<div class="mt-2">
<x-input-label value="{{ $name}}" />
<input {{ $disabled ? 'disabled' : '' }} id="{{ $name }}" name="{{ $name }}"
    {!! $attributes->merge(['class' => 'border-slate-300 dark:border-slate-700 b
     dark:bg-slate-700 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600
      focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-lg shadow-sm'],['value' => old($name)]) !!} />
    <x-input-error :messages="$errors->get($name)" class="mt-2" />
</div>
