<x-admin-layout>
    <x-layouts.setting :title="'Products'" :name="'Create'" >
        <form class="" action="{{ route('products.store') }}" method="POST">
            @csrf
            <x-layouts.form-style>
                <x-layouts.text-input type="text" name="title"/>
                <x-layouts.text-input type="number" name="size"/>
                <x-layouts.text-input type="number" name="number"/>
            </x-layouts.form-style>
            <x-layouts.form-button name="Create" route="{{route('products.index')}}"/>
        </form>
    </x-layouts.setting>
</x-admin-layout>
