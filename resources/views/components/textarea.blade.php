@props(['name'])
<div class="mt-2">
    <x-layouts.label name="{{ $name }}"/>
    <textarea name="{{ $name }}" id="{{ $name }}"
          {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-slate-700 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm' ]) !!}
              >
    {{ $slot ?? old($name) }}
</textarea>
    <x-input-error :messages="$errors->get($name)" class="mt-2" />
</div>
