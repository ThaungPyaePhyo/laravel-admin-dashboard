@props(['type' => '', 'name' => ''])
<div>
 <x-layouts.label name="{{ $name }}"/>
 <input type="{{ $type }}" name="{{ $name }}" id="{{$name}}" class="bg-white dark:bg-slate-700 border border-slate-500 rounded-xl w-full">
</div>
