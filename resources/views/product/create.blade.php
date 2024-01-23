<x-admin-layout>
    <x-layouts.setting :title="'Products'" :name="'Create'" >
        <form class="" action="{{ route('products.store') }}" method="POST">
            @csrf
            <x-layouts.form-style>
                <x-text-input class="w-full mt-1" name="title"/>
                <x-text-input class="w-full mt-1" name="size"/>
                <x-text-input class="w-full mt-1" name="number"/>
            </x-layouts.form-style>
            <x-layouts.form-button name="Create" route="{{route('products.index')}}"/>
        </form>
    </x-layouts.setting>
</x-admin-layout>
