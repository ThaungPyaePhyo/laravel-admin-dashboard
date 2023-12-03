@extends('dashboard')

@section('content')
    <div class="px-4 sm:ml-64">
        <div class="mx-28 mb-4">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <i class="fa-solid fa-house fa-md text-gray-500"></i>&nbsp;
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fa-regular fa-greater-than fa-xs text-gray-500"></i>
                        <a href="#"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Templates</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fa-regular fa-greater-than fa-xs text-gray-500"></i>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Flowbite</span>
                    </div>
                </li>
            </ol>
        </div>
        <div class="flex justify-between mx-28 mb-10">
            <div class="flex align-middle flex-col">
                <h1 class="text-white text-3xl font-bold">Products</h1>
            </div>
        </div>
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
