<!DOCTYPE html>
<html lang="en" x-data="{ sidebarOpen: false }" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magang Dashboard</title>

    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 h-full">

    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <x-sidebar />

        <!-- Overlay (untuk mobile) -->
        <div x-show="sidebarOpen" @click="sidebarOpen = false"
             class="fixed inset-0 bg-black opacity-50 z-20 md:hidden"></div>

        <!-- Konten utama -->
        <div class="flex-1 flex flex-col overflow-hidden">
            @yield('content')
        </div>
    </div>

</body>
</html>
