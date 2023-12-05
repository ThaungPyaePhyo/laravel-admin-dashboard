@extends('dashboard')

@section('content')
<div class="px-4 sm:ml-64">
    <x-admin.header :title="'Product Category'" :name="'Create'" />
    <form action="{{route('category.store')}}" method="POST">
        @csrf
   <div class="bg-gray-800 text-white border-gray-200 rounded-lg mx-28 p-5">
            <div class="grid grid-cols-2 content-center gap-4">
              <div>
                  <label>Name</label>
                  <input type="text" name="name" class="bg-gray-700 border rounded-xl w-full">
              </div>
              <div>
                  <label>Description</label>
                  <textarea name="description" class="bg-gray-700 border rounded-xl w-full"></textarea>
              </div>
            </div>
   </div>
    <div class="mx-28 my-5">
        <div class="">
            <button type="submit" class="rounded-lg p-2 bg-yellow-500 text-white text-sm font-bold px-4">Create</button>
            <a class="rounded-lg p-2 bg-gray-800 text-white text-sm font-bold px-4" href="{{ route('products.index') }}">Cancel</a>
        </div>
    </div>
              </form>
</div>
@endsection
@section('js')
@endsection
