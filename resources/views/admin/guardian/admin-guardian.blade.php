<x-admin.layout>
    <x-slot name="title">{{ $title }}</x-slot>
    
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            
            {{-- Success Message --}}
            @if(session('success'))
                <div class="mb-4 p-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden"
                x-data="{ 
                    openAddModal: false, 
                    openEditModal: false, 
                    editGuardianId: null, 
                    openDeleteModal: false, 
                    deleteUrl: null 
                }">
                
                {{-- Menu Table --}}
                <x-admin.menu-table button-label="Add Guardian" on-click="openAddModal = true" />

                {{-- Modal Add --}}
                <div x-show="openAddModal" 
                     x-transition
                     @click.self="openAddModal = false"
                     class="fixed inset-0 flex items-center justify-center bg-black/50 z-50"
                     style="display: none;">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative max-h-[90vh] overflow-y-auto">
                        <button @click="openAddModal = false"
                            class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 text-2xl font-bold">
                            ✕
                        </button>
                        @include('admin.guardian.create')
                    </div>
                </div>

                {{-- Table --}}
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">#</th>
                                <th scope="col" class="px-4 py-3">Name</th>
                                <th scope="col" class="px-4 py-3">Job</th>
                                <th scope="col" class="px-4 py-3">Phone</th>
                                <th scope="col" class="px-4 py-3">Email</th>
                                <th scope="col" class="px-4 py-3">Address</th>
                                <th scope="col" class="px-4 py-3 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($guardians as $guardian)
                                <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-4 py-3">{{ $guardians->firstItem() + $loop->index }}</td>
                                    <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">{{ $guardian->name }}</td>
                                    <td class="px-4 py-3">{{ $guardian->job ?? '-' }}</td>
                                    <td class="px-4 py-3">{{ $guardian->phone }}</td>
                                    <td class="px-4 py-3">{{ $guardian->email }}</td>
                                    <td class="px-4 py-3">{{ Str::limit($guardian->address, 30) }}</td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center justify-center space-x-2">
                                            {{-- Edit Button --}}
                                            <button 
                                                @click="openEditModal = true; editGuardianId = {{ $guardian->id }}"
                                                class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>

                                            {{-- Delete Button --}}
                                            <button 
                                                @click="deleteUrl = '{{ route('admin.guardian.destroy', $guardian->id) }}'; openDeleteModal = true"
                                                class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-4 py-8 text-center text-gray-500 dark:text-gray-400">
                                        No guardians found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="p-4">
                    {{ $guardians->links() }}
                </div>

                {{-- Modal Edit --}}
                @foreach ($guardians as $guardian)
                    <div x-show="openEditModal && editGuardianId === {{ $guardian->id }}" 
                         x-transition
                         @click.self="openEditModal = false"
                         class="fixed inset-0 flex items-center justify-center bg-black/50 z-50"
                         style="display: none;">
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative max-h-[90vh] overflow-y-auto">
                            <button @click="openEditModal = false"
                                class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 text-2xl font-bold">
                                ✕
                            </button>
                            @include('admin.guardian.edit', ['guardian' => $guardian])
                        </div>
                    </div>
                @endforeach

                {{-- Modal Delete --}}
                <div x-show="openDeleteModal" 
                     x-transition
                     @click.self="openDeleteModal = false"
                     class="fixed inset-0 flex items-center justify-center bg-black/50 z-50"
                     style="display: none;">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-md p-6 relative">
                        <button @click="openDeleteModal = false"
                            class="absolute top-2 right-3 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 text-xl">
                            ✕
                        </button>

                        <div class="text-center">
                            <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            <h3 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Delete Guardian</h3>
                            <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this guardian? This action cannot be undone.</p>

                            <div class="flex justify-center items-center space-x-4">
                                <button @click="openDeleteModal = false"
                                    class="py-2 px-4 text-sm font-medium text-gray-700 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:bg-gray-600">
                                    Cancel
                                </button>

                                <form :action="deleteUrl" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="py-2 px-4 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600">
                                        Yes, Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-admin.layout>