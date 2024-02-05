<x-layouts.index-form-style name="Product" :route="route('products.create')">
    <table id="table" class="display py-2">
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
    <script>
             $(document).ready(function() {
                $('#table').DataTable({
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
                                <div class="flex items-center space-x-2">
                                    <a href="/products/${data.id}/edit" class="text-yellow-500">
                                        <i class="fa-regular fa-pen-to-square fa-lg"></i>
                                    </a>
                                    <button onclick="showConfirmModal(this,'product_table')" class="text-red-600" data-url="${deleteUrl}">
                                        <i class="fa-solid fa-trash fa-lg"></i>
                                    </button>
                                </div>
                                `;
                            }
                        }
                    ],
                });
            });
    </script>
</x-layouts.index-form-style>


