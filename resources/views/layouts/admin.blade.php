<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - ArchiVision</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,700;1,500&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3, .font-playfair { font-family: 'Playfair Display', serif; }
        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #020617; }
        ::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #334155; }
    </style>
</head>
<body class="bg-slate-950 text-slate-50 antialiased overflow-hidden" x-data="{ sidebarOpen: true }">

    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar -->
        <aside 
            :class="sidebarOpen ? 'translate-x-0 w-64' : '-translate-x-full w-0 lg:w-20 lg:translate-x-0'"
            class="fixed inset-y-0 left-0 z-50 flex flex-col transition-all duration-300 ease-in-out bg-slate-900/50 backdrop-blur-xl border-r border-slate-800/50 lg:relative"
        >
            <!-- Logo -->
            <div class="flex items-center justify-between h-20 px-6 border-b border-slate-800/50">
                <a href="/" class="flex items-center gap-3 text-xl font-bold font-playfair" x-show="sidebarOpen">
                    <i class="fa-solid fa-cube text-amber-400"></i>
                    <span>ArchiVision</span>
                </a>
                <a href="/" class="flex items-center justify-center w-full text-xl font-bold font-playfair" x-show="!sidebarOpen" style="display: none;">
                    <i class="fa-solid fa-cube text-amber-400"></i>
                </a>
                
                <!-- Mobile close button -->
                <button @click="sidebarOpen = false" class="lg:hidden text-slate-400 hover:text-slate-200">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 px-4 py-6 overflow-y-auto space-y-2">
                <a href="/admin/dashboard" class="flex items-center gap-4 px-4 py-3 rounded-xl font-medium transition-colors border {{ request()->is('admin/dashboard') ? 'bg-amber-400/10 text-amber-400 border-amber-400/20' : 'text-slate-400 hover:bg-slate-800/50 hover:text-slate-200 border-transparent' }}">
                    <i class="fa-solid fa-chart-pie w-5 text-center"></i>
                    <span x-show="sidebarOpen" class="whitespace-nowrap">Dashboard</span>
                </a>
                <a href="/admin/projects" class="flex items-center gap-4 px-4 py-3 rounded-xl font-medium transition-colors border {{ request()->is('admin/projects') ? 'bg-amber-400/10 text-amber-400 border-amber-400/20' : 'text-slate-400 hover:bg-slate-800/50 hover:text-slate-200 border-transparent' }}">
                    <i class="fa-solid fa-building w-5 text-center"></i>
                    <span x-show="sidebarOpen" class="whitespace-nowrap">Manajemen Proyek</span>
                </a>
                <a href="/admin/clients" class="flex items-center gap-4 px-4 py-3 rounded-xl font-medium transition-colors border {{ request()->is('admin/clients') ? 'bg-amber-400/10 text-amber-400 border-amber-400/20' : 'text-slate-400 hover:bg-slate-800/50 hover:text-slate-200 border-transparent' }}">
                    <i class="fa-solid fa-users w-5 text-center"></i>
                    <span x-show="sidebarOpen" class="whitespace-nowrap">Klien</span>
                </a>
                <a href="/admin/messages" class="flex items-center gap-4 px-4 py-3 rounded-xl font-medium transition-colors border {{ request()->is('admin/messages') ? 'bg-amber-400/10 text-amber-400 border-amber-400/20' : 'text-slate-400 hover:bg-slate-800/50 hover:text-slate-200 border-transparent' }}">
                    <i class="fa-solid fa-envelope w-5 text-center"></i>
                    <span x-show="sidebarOpen" class="whitespace-nowrap">Pesan</span>
                    <span x-show="sidebarOpen" class="ml-auto bg-amber-400 text-slate-900 text-xs font-bold px-2 py-0.5 rounded-full">3</span>
                </a>
                <a href="/admin/settings" class="flex items-center gap-4 px-4 py-3 rounded-xl font-medium transition-colors border {{ request()->is('admin/settings') ? 'bg-amber-400/10 text-amber-400 border-amber-400/20' : 'text-slate-400 hover:bg-slate-800/50 hover:text-slate-200 border-transparent' }}">
                    <i class="fa-solid fa-gear w-5 text-center"></i>
                    <span x-show="sidebarOpen" class="whitespace-nowrap">Pengaturan</span>
                </a>
            </nav>

            <!-- User Profile (Bottom) -->
            <div class="p-4 border-t border-slate-800/50">
                <div class="flex items-center gap-3" :class="!sidebarOpen ? 'justify-center' : ''">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-amber-500 to-amber-300 flex items-center justify-center text-slate-900 font-bold shadow-lg shadow-amber-500/20 flex-shrink-0">
                        A
                    </div>
                    <div x-show="sidebarOpen" class="overflow-hidden">
                        <p class="text-sm font-semibold text-slate-200 truncate">Admin ArchiVision</p>
                        <p class="text-xs text-slate-400 truncate">admin@archivision.com</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 w-full overflow-hidden">
            
            <!-- Topbar -->
            <header class="flex items-center justify-between h-20 px-6 sm:px-10 bg-slate-900/30 backdrop-blur-md border-b border-slate-800/50 z-40">
                <div class="flex items-center gap-4">
                    <button @click="sidebarOpen = !sidebarOpen" class="p-2 text-slate-400 hover:text-amber-400 transition-colors focus:outline-none bg-slate-800/50 rounded-lg border border-slate-700/50">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    
                    <div class="hidden sm:flex items-center relative">
                        <i class="fa-solid fa-search absolute left-3 text-slate-500"></i>
                        <input type="text" placeholder="Cari proyek atau klien..." class="pl-10 pr-4 py-2 bg-slate-800/50 border border-slate-700/50 rounded-full text-sm focus:outline-none focus:border-amber-400/50 focus:ring-1 focus:ring-amber-400/50 text-slate-200 placeholder-slate-500 w-64 transition-all focus:w-80">
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <button class="relative p-2 text-slate-400 hover:text-amber-400 transition-colors bg-slate-800/50 rounded-lg border border-slate-700/50">
                        <i class="fa-regular fa-bell"></i>
                        <span class="absolute top-1 right-1 w-2.5 h-2.5 bg-red-500 border-2 border-slate-900 rounded-full"></span>
                    </button>
                    <a href="/" target="_blank" class="hidden sm:flex items-center gap-2 px-4 py-2 bg-slate-800/50 hover:bg-slate-700/50 text-slate-300 text-sm font-medium rounded-full border border-slate-700/50 transition-colors">
                        <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i> View Site
                    </a>
                </div>
            </header>

            <!-- Content Area -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]">
                <!-- Inner padding wrapper -->
                <div class="p-6 sm:p-10 max-w-7xl mx-auto">
                    @yield('content')
                </div>
            </main>

        </div>
    </div>

</body>
</html>
