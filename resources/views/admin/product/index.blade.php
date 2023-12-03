@extends('dashboard')

@section('content')
    <div class="px-4 sm:ml-64">
        <x-admin.product.header/>
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
