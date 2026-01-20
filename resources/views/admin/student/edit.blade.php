<form action="{{ route('admin.student.update', $student->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')
    
    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">
        Edit Student
    </h3>

    <div class="grid gap-4 sm:grid-cols-2">
        {{-- Name --}}
        <div class="sm:col-span-2">
            <label for="edit_name_{{ $student->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Full Name <span class="text-red-500">*</span>
            </label>
            <input type="text" 
                   name="name" 
                   id="edit_name_{{ $student->id }}" 
                   value="{{ old('name', $student->name) }}"
                   required
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @error('name')  
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Date of Birth --}}
        <div>
            <label for="edit_date_of_birth_{{ $student->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Date of Birth <span class="text-red-500">*</span>
            </label>
            <input type="date" 
                   name="date_of_birth" 
                   id="edit_date_of_birth_{{ $student->id }}" 
                   value="{{ old('date_of_birth', $student->date_of_birth) }}"
                   required
                   max="{{ date('Y-m-d') }}"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @error('date_of_birth')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Classroom --}}
        <div>
            <label for="edit_classroom_id_{{ $student->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Classroom <span class="text-red-500">*</span>
            </label>
            <select name="classroom_id" 
                    id="edit_classroom_id_{{ $student->id }}" 
                    required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <option value="">-- Select Classroom --</option>
                @foreach ($classrooms as $classroom)
                    <option value="{{ $classroom->id }}" 
                        {{ old('classroom_id', $student->classroom_id) == $classroom->id ? 'selected' : '' }}>
                        {{ $classroom->name }}
                    </option>
                @endforeach
            </select>
            @error('classroom_id')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div class="sm:col-span-2">
            <label for="edit_email_{{ $student->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Email <span class="text-red-500">*</span>
            </label>
            <input type="email" 
                   name="email" 
                   id="edit_email_{{ $student->id }}" 
                   value="{{ old('email', $student->email) }}"
                   required
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @error('email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Address --}}
        <div class="sm:col-span-2">
            <label for="edit_address_{{ $student->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Address
            </label>
            <textarea name="address" 
                      id="edit_address_{{ $student->id }}" 
                      rows="3"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('address', $student->address) }}</textarea>
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
            Update Student
        </button>
    </div>
</form>