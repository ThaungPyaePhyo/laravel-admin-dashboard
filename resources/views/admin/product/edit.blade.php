@extends('dashboard')

@section('content')
    <div class="px-4 sm:ml-64">
        <x-admin.header :title="'Products'" :name="'Edit'"/>
        <form action="{{ route('products.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="bg-gray-800 text-white border-gray-200 rounded-lg mx-28 p-5">
                <div class="grid grid-cols-2 content-center gap-4">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" class="bg-gray-700 border rounded-xl w-full"
                            value="{{ $data->title ?? '' }}">
                    </div>
                    <div>
                        <label>Size</label>
                        <input type="text" name="size" class="bg-gray-700 border rounded-xl w-full"
                            value="{{ $data->size ?? '' }}">
                    </div>
                    <div>
                        <label>Price</label>
                        <input type="number" name="price" class="bg-gray-700 border rounded-xl w-full"
                            value="{{ $data->price ?? '' }}">
                    </div>
                </div>
            </div>
            <div class="mx-28 my-5">
                <div class="">
                    <button type="submit"
                        class="rounded-lg p-2 bg-yellow-500 text-white text-sm font-bold px-4">Update</button>
                    <a class="rounded-lg p-2 bg-gray-800 text-white text-sm font-bold px-4"
                        href="{{ route('products.index') }}">Cancel</a>
                </div>
            </div>
        </form>
    </div>i
@endsection
@section('js')
@endsection
