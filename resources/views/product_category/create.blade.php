<x-admin-layout>
<x-layouts.input-form :title="'Products'" :name="'Create'" >
        <div>
            <label>Name</label>
            <input type="text" name="name" class="bg-white dark:bg-slate-700 border border-slate-500 rounded-xl w-full">
        </div>
        <div>
            <label>Description</label>
            <textarea name="description" class="bg-white dark:bg-slate-700 border border-slate-500 rounded-xl w-full"></textarea>
        </div>
    </x-layouts.input-form>
</x-admin-layout>
