<x-admin-layout>
    <div class="px-4 sm:ml-64">
        <x-admin.header :title="'Products'" :name="'List'" :route="route('products.create')"/>
        <div class="bg-white text-slate-900  dark:bg-gray-800 shadow-lg
            border border-gray-200 dark:border-gray-900 px-8 dark:text-gray-100 rounded-lg mx-28 p-5">
            <table id="product_table" class="display">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
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
</x-admin-layout>
