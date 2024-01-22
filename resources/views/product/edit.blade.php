<x-admin-layout>
    <x-layouts.setting :title="'Products'" :name="'Edit'" >
        <form action="{{ route('products.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <x-layouts.form-style>
                <x-layouts.text-input type="text" name="title" :value="old('title', $data->title)" />
                <x-layouts.text-input type="text" name="size" :value="old('size', $data->size)" />
                <x-layouts.text-input type="number" name="price" :value="old('price', $data->price)" />
            </x-layouts.form-style>
            <x-layouts.form-button name="Update" route="{{route('products.index')}}"/>
        </form>
    </x-layouts.setting>
</x-admin-layout>
