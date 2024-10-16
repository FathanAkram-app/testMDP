<div>
    <!-- Modal Background -->
    <div class="fixed inset-0 z-50 flex items-center justify-center" style="display: {{ $isOpen ? 'flex' : 'none' }};">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        <div class="bg-white rounded-lg overflow-hidden shadow-xl z-10">
            <div class="p-4">
                <h2 class="text-lg font-semibold">Add New Model</h2>
                <form wire:submit.prevent="save">
                    <div class="mt-2">
                        <label class="block text-sm">Model Name:</label>
                        <input type="text" wire:model="modelName" class="border rounded p-2 w-full" required>
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm">Description:</label>
                        <textarea wire:model="description" class="border rounded p-2 w-full" required></textarea>
                    </div>
                    <div class="mt-4 flex justify-end">
                        <button type="button" wire:click="closeModal()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mr-2">Cancel</button>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
