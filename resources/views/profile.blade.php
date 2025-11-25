<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="min-h-screen flex justify-center items-center rounded-xl text-gray-800 w-auto h-auto">
        <div class="max-w-2xl w-full bg-white rounded-2xl shadow-lg p-8 m-6">
            <div class="text-center mb-8">
                <img src="https://c.inilah.com/reborn/2025/02/Profil_Deddy_Corbuzier_0948735a03.jpg" 
                     alt="Foto Profil"
                     class="w-36 h-36 rounded-full border-4 border-gray-800 object-cover mx-auto">
                <h1 class="mt-4 text-3xl font-bold text-gray-900">{{ $nama }}</h1>
                <p class="text-gray-600">Siswa {{ $kelas }} | {{ $sekolah }}</p>
            </div>
            <div>
                <h2 class="text-2xl font-semibold border-b-2 border-gray-800 pb-2 mb-4">Tentang Saya</h2>
                <ul class="space-y-3">
                    <li class="text-lg">Hobi: {{ $hobi }}</li>
                    <li class="text-lg">Email: {{ $email }}</li>
                    <li class="text-lg">No HP: {{ $nomorhp }}</li>
                </ul>
            </div>
        </div>
    </div>
</x-layout>