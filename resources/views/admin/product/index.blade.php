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
            <a class="rounded-lg p-2 bg-yellow-500 text-white text-sm font-bold px-4"
                href="{{ route('products.create') }}">Add New</a>
        </div>
        <div class="bg-gray-700 text-white border-gray-200 rounded-lg mx-28 p-5">
            <table id="product_table" class="display">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $(document).ready(function() {
                $('#product_table').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: false,
                    ajax: {
                        type: 'get',
                        url: '{{ route('get.product') }}',
                    },
                    columns: [{
                            "data": "row_id",
                            "name": "row_id"
                        },
                        {
                            data: 'title',
                            name: 'title'
                        },
                        {
                            data: 'size',
                            name: 'size'
                        },
                        {
                            data: 'price',
                            name: 'price'
                        },
                        {
                            data: null,
                            name: 'action',
                           render: function(data, type, row) {
                                var deleteUrl = `/products/${data.id}`;

                                return `
                                    <a href="/products/${data.id}/edit" class="text-yellow-500">
                                        <i class="fa-regular fa-pen-to-square fa-sm"></i>
                                        <span class="hover:underline">Edit</span>
                                    </a>
                                    <button onclick="showConfirmModal(this,'product_table')" class="text-red-600" data-url="${deleteUrl}">
                                        <i class="fa-solid fa-trash fa-sm"></i>
                                        <span class="hover:underline">Delete</span>
                                    </button>
                                `;
                            }
                        }
                    ],
                });
            });

        })
    </script>
@endsection
