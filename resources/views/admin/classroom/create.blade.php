<form action="{{ route('admin.classroom.store') }}" method="POST" class="space-y-4">
    @csrf
    
    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">
        Add New Classroom
    </h3>

    <div>
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Classroom Name <span class="text-red-500">*</span>
        </label>
        <input type="text" 
               name="name" 
               id="name" 
               value="{{ old('name') }}"
               required
               placeholder="e.g. 10 PPLG 1, 11 PPLG 2"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
        @error('name')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
            Example: 10 PPLG 1, 11 RPL 2, 12 TKJ 1
        </p>
    </div>

    {{-- Buttons --}}
    <div class="flex justify-end space-x-2 pt-4 border-t dark:border-gray-600">
        <button type="button"
                @click="openAddModal = false"
                class="py-2.5 px-5 text-sm font-medium text-gray-700 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:bg-gray-600">
            Cancel
        </button>
        <button type="submit"
                class="py-2.5 px-5 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700">
            <svg class="w-4 h-4 inline mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
            </svg>
            Save Classroom
        </button>
    </div>
</form>