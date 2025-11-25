<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Admin Dashboard' }}</title>
</head>
<body class="h-full">
    <div class="antialiased bg-gray-50 dark:bg-gray-900 min-h-screen">
        <x-admin.navbar></x-admin.navbar>
        <x-admin.sidebar></x-admin.sidebar>

        <main class="p-4 md:ml-64 pt-20 min-h-screen bg-gray-50 dark:bg-gray-900">
            {{ $slot }}
        </main>
    </div>
</body>
</html>