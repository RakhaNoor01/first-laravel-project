<form action="{{ route('admin.guardian.update', $guardian->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')
    
    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">
        Edit Guardian
    </h3>

    <div class="grid gap-4 sm:grid-cols-2">
        {{-- Name --}}
        <div class="sm:col-span-2">
            <label for="edit_name_{{ $guardian->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Full Name <span class="text-red-500">*</span>
            </label>
            <input type="text" 
                   name="name" 
                   id="edit_name_{{ $guardian->id }}" 
                   value="{{ old('name', $guardian->name) }}"
                   required
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Job --}}
        <div>
            <label for="edit_job_{{ $guardian->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Job/Occupation
            </label>
            <input type="text" 
                   name="job" 
                   id="edit_job_{{ $guardian->id }}" 
                   value="{{ old('job', $guardian->job) }}"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @error('job')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Phone --}}
        <div>
            <label for="edit_phone_{{ $guardian->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Phone Number <span class="text-red-500">*</span>
            </label>
            <input type="text" 
                   name="phone" 
                   id="edit_phone_{{ $guardian->id }}" 
                   value="{{ old('phone', $guardian->phone) }}"
                   required
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @error('phone')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div class="sm:col-span-2">
            <label for="edit_email_{{ $guardian->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Email <span class="text-red-500">*</span>
            </label>
            <input type="email" 
                   name="email" 
                   id="edit_email_{{ $guardian->id }}" 
                   value="{{ old('email', $guardian->email) }}"
                   required
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @error('email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Address --}}
        <div class="sm:col-span-2">
            <label for="edit_address_{{ $guardian->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Address
            </label>
            <textarea name="address" 
                      id="edit_address_{{ $guardian->id }}" 
                      rows="3"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('address', $guardian->address) }}</textarea>
            @error('address')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    {{-- Buttons --}}
    <div class="flex justify-end space-x-2 pt-4 border-t dark:border-gray-600">
        <button type="button"
                @click="openEditModal = false"
                class="py-2.5 px-5 text-sm font-medium text-gray-700 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:bg-gray-600">
            Cancel
        </button>
        <button type="submit"
                class="py-2.5 px-5 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700">
            <svg class="w-4 h-4 inline mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
            </svg>
            Update Guardian
        </button>
    </div>
</form>