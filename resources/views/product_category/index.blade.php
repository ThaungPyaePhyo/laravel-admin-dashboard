<x-admin-layout>
    @section('title', 'Category')
    <div class="px-4 sm:ml-64">
        <x-admin.header :title="'Product Category'" :name="'List'" :route="route('category.create')"/>
        <div class="bg-white text-slate-900  dark:bg-slate-800 shadow-lg
            border border-slate-200 dark:border-slate-900 px-8 dark:text-slate-100 rounded-lg mx-28 p-5">
            <table id="product_category_table" class="display">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Description</th>
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
                $('#product_category_table').DataTable({
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
                           render: function(data, type, row) {
                                var deleteUrl = `/category/${data.id}`;

                                return `
                                    <a href="/category/${data.id}/edit" class="text-yellow-500">
                                        <i class="fa-regular fa-pen-to-square fa-sm"></i>
                                        <span class="hover:underline">Edit</span>
                                    </a>
                                    <button onclick="showConfirmModal(this,'product_category_table')" class="text-red-600" data-url="${deleteUrl}">
                                        <i class="fa-solid fa-trash fa-sm"></i>
                                        <span class="hover:underline">Delete</span>
                                    </button>
                                `;
                            }
                        }
                    ],
                });
        })
    </script>
</x-admin-layout>
