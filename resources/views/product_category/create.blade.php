<x-admin-layout>
<x-layouts.setting :title="'Product Category'" :name="'Create'" >
    <form class="" action="{{ route('category.store') }}" method="POST">
        @csrf
        <x-layouts.form-style>
            <x-layouts.text-input type="text" name="name"/>
            <x-layouts.textarea name="description"/>
        </x-layouts.form-style>
        <x-layouts.form-button route="{{route('category.index')}}"/>
    </form>
</x-layouts.setting>
</x-admin-layout>
