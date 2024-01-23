<x-layouts.index-form-style name="Product Category" :route="route('category.create')">
    <table id="table" class="stripe py-4" style="width: 100%">
        <thead>
        <tr class="bg-slate-400">
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
            $('#table').DataTable({
                processing: true,
                serverSide: true,
                responsive: false,
                ajax: {
                    type: 'get',
                    url: '{{ route('get.category') }}',
                },
                columns: [{
                    "data": "row_id",
                    "name": "row_id"
                },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'description',
                        title: 'description'
                    },
                    {
                        data: null,
                        name: 'action',
                        render: function (data, type, row) {
                            var editUrl = `/category/${data.id}/edit`;
                            var deleteUrl = `/category/${data.id}`;

                            return `
                                <div class="flex items-center space-x-2">
                                    <a href="${editUrl}" class="text-yellow-500">
                                        <i class="fa-regular fa-pen-to-square fa-lg"></i>
                                    </a>
                                    <button onclick="showConfirmModal(this,'product_category_table')" class="text-red-600 ml-2" data-url="${deleteUrl}">
                                        <i class="fa-solid fa-trash fa-lg"></i>
                                    </button>
                                </div>
                            `;
                        }
                    }
                ],
            });
        })
    </script>
</x-layouts.index-form-style>
