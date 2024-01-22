<x-admin-layout>
    <x-layouts.setting :title="'Product Category'" :name="'Edit'" >
        <form action="{{ route('category.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <x-layouts.form-style>
                <x-layouts.text-input type="text" name="name" :value="old('name', $data->name)" />
                <x-layouts.textarea name="description">{{old('name', $data->description)}}</x-layouts.textarea>
            </x-layouts.form-style>
            <x-layouts.form-button route="{{route('category.index')}}"/>
        </form>
    </x-layouts.setting>
</x-admin-layout>
