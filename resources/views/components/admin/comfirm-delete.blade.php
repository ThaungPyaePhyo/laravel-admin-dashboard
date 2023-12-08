<div id="confirmModal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
        <p class="mb-4">Are you sure you want to delete this item?</p>
        <div class="flex justify-end">
            <button id="confirmDelete" class="bg-red-500 text-white px-4 py-2 rounded-md mr-2">Delete</button>
            <button id="cancelDelete" class="bg-gray-400 text-white px-4 py-2 rounded-md">Cancel</button>
        </div>
    </div>
</div>

<script>
    function showConfirmModal(button, table_id) {
        let deleteUrl = $(button).data('url');
        const confirmModal = $('#confirmModal');
        const confirmDeleteButton = $('#confirmDelete');
        const cancelDeleteButton = $('#cancelDelete');

        const dataTable = $('#' + table_id).DataTable();

        const deleteFunction = function() {
            axios({
                method: 'DELETE',
                url: deleteUrl,
            })
                .then(function(response) {
                    let data = response.data.message;
                    if (data === 1) {
                        toastr.success('{{ session('success') }}', 'Success', {

                        });

                        confirmModal.addClass('hidden');
                        dataTable.draw();
                        $(button).data('url', '');

                        confirmDeleteButton.off('click', deleteFunction);
                    }
                });

            deleteUrl = null;
        };

        confirmDeleteButton.on('click', deleteFunction);

        cancelDeleteButton.on('click', () => {
            confirmModal.addClass('hidden');
            confirmDeleteButton.off('click', deleteFunction);
        });
        confirmModal.removeClass('hidden');
    }
</script>
