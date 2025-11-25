<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="flex justify-center mt-3">
        <div class="w-full max-w-7xl bg-white p-6 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Daftar Data Guru</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 table-auto">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-2 text-left">No</th>
                            <th class="px-4 py-2 text-left">Name</th>
                            <th class="px-4 py-2 text-left">Subject Name</th>
                            <th class="px-4 py-2 text-left">Phone</th>
                            <th class="px-4 py-2 text-left">Email</th>
                            <th class="px-4 py-2 text-left">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($teachers as $teacher)
                            <tr class="border-b">
                                <td class="px-4 py-2 whitespace-nowrap">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $teacher->name }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $teacher->subject->name }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $teacher->phone }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $teacher->email }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $teacher->address }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-4 py-8 text-center text-gray-500">No teachers found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>