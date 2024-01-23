<x-admin-layout>
<x-layouts.setting :title="'Product Category'" :name="'Create'" >
    <form class="" action="{{ route('category.store') }}" method="POST">
        @csrf
        <x-layouts.form-style>
            <x-text-input class="w-full mt-1" name="name"/>
            <x-textarea name="description" class="w-full mt-1" />
        </x-layouts.form-style>
        <x-layouts.form-button name="Create" route="{{route('category.index')}}"/>
    </form>
</x-layouts.setting>
</x-admin-layout>
