<x-admin-layout>
<x-layouts.input-form :title="'Products'" :name="'Create'" >
                <div>
                    <label>Title</label>
                    <input type="text" name="title" class="bg-gray-700 border rounded-xl w-full">
                </div>
                <div>
                    <label>Size</label>
                    <input type="text" name="size" class="bg-gray-700 border rounded-xl w-full">
                </div>
                <div>
                    <label>Price</label>
                    <input type="number" name="price" class="bg-gray-700 border rounded-xl w-full">
                </div>
</x-layouts.input-form>
</x-admin-layout>

