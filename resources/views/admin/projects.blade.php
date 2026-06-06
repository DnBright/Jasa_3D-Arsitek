@extends('layouts.admin')

@section('title', 'Manajemen Proyek')

@section('content')
    <div class="mb-8 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
        <div>
            <h1 class="text-3xl font-bold font-playfair mb-1">Manajemen Proyek</h1>
            <p class="text-slate-400">Kelola dan pantau seluruh proyek rendering 3D Anda di sini.</p>
        </div>
        <button class="px-5 py-2.5 bg-gradient-to-r from-amber-500 to-amber-400 hover:from-amber-400 hover:to-amber-300 text-slate-950 font-semibold rounded-xl shadow-lg shadow-amber-500/20 transition-all flex items-center gap-2">
            <i class="fa-solid fa-plus"></i> Tambah Proyek
        </button>
    </div>

    <!-- Filters -->
    <div class="flex flex-wrap items-center gap-3 mb-6">
        <button class="px-4 py-2 rounded-full bg-amber-400/10 text-amber-400 border border-amber-400/20 text-sm font-medium transition-colors">Semua Proyek</button>
        <button class="px-4 py-2 rounded-full bg-slate-800/50 hover:bg-slate-800 text-slate-400 hover:text-slate-200 border border-slate-700/50 text-sm font-medium transition-colors">Rendering (2)</button>
        <button class="px-4 py-2 rounded-full bg-slate-800/50 hover:bg-slate-800 text-slate-400 hover:text-slate-200 border border-slate-700/50 text-sm font-medium transition-colors">Revisi (1)</button>
        <button class="px-4 py-2 rounded-full bg-slate-800/50 hover:bg-slate-800 text-slate-400 hover:text-slate-200 border border-slate-700/50 text-sm font-medium transition-colors">Selesai (121)</button>
    </div>

    <!-- Projects Table -->
    <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-950/50 text-slate-400 text-sm border-b border-slate-800">
                        <th class="px-6 py-4 font-medium">Nama Proyek</th>
                        <th class="px-6 py-4 font-medium">Klien</th>
                        <th class="px-6 py-4 font-medium">Tenggat Waktu</th>
                        <th class="px-6 py-4 font-medium">Status</th>
                        <th class="px-6 py-4 font-medium">Progress</th>
                        <th class="px-6 py-4 font-medium text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-slate-800/50">
                    
                    <tr class="hover:bg-slate-800/30 transition-colors">
                        <td class="px-6 py-4">
                            <p class="font-medium text-slate-200">Villa Lumina Eksterior</p>
                            <p class="text-xs text-slate-500">Render 3D Resolusi 4K</p>
                        </td>
                        <td class="px-6 py-4 text-slate-300">PT. Adhi Karya</td>
                        <td class="px-6 py-4 text-slate-300">12 Okt 2026</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-emerald-400/10 text-emerald-400 border border-emerald-400/20">Selesai</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="w-full bg-slate-800 rounded-full h-1.5 mb-1">
                                <div class="bg-emerald-400 h-1.5 rounded-full" style="width: 100%"></div>
                            </div>
                            <span class="text-xs text-slate-400">100%</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="p-2 text-slate-400 hover:text-amber-400 transition-colors"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="p-2 text-slate-400 hover:text-red-400 transition-colors"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    
                    <tr class="hover:bg-slate-800/30 transition-colors">
                        <td class="px-6 py-4">
                            <p class="font-medium text-slate-200">Interior Urban Minimalist</p>
                            <p class="text-xs text-slate-500">Living Room & Kitchen</p>
                        </td>
                        <td class="px-6 py-4 text-slate-300">Bpk. Sudirman</td>
                        <td class="px-6 py-4 text-slate-300">15 Okt 2026</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-amber-400/10 text-amber-400 border border-amber-400/20">Revisi</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="w-full bg-slate-800 rounded-full h-1.5 mb-1">
                                <div class="bg-amber-400 h-1.5 rounded-full" style="width: 85%"></div>
                            </div>
                            <span class="text-xs text-slate-400">85%</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="p-2 text-slate-400 hover:text-amber-400 transition-colors"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="p-2 text-slate-400 hover:text-red-400 transition-colors"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    
                    <tr class="hover:bg-slate-800/30 transition-colors">
                        <td class="px-6 py-4">
                            <p class="font-medium text-slate-200">Zenith Corporate HQ</p>
                            <p class="text-xs text-slate-500">Fasad & Lobi</p>
                        </td>
                        <td class="px-6 py-4 text-slate-300">Zenith Group</td>
                        <td class="px-6 py-4 text-amber-400">Hari ini</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-blue-400/10 text-blue-400 border border-blue-400/20">Rendering</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="w-full bg-slate-800 rounded-full h-1.5 mb-1">
                                <div class="bg-blue-400 h-1.5 rounded-full" style="width: 45%"></div>
                            </div>
                            <span class="text-xs text-slate-400">45%</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="p-2 text-slate-400 hover:text-amber-400 transition-colors"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="p-2 text-slate-400 hover:text-red-400 transition-colors"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="p-6 border-t border-slate-800 flex items-center justify-between">
            <span class="text-sm text-slate-400">Menampilkan 1-3 dari 124 proyek</span>
            <div class="flex items-center gap-2">
                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-slate-800 text-slate-400 cursor-not-allowed"><i class="fa-solid fa-chevron-left text-xs"></i></button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-amber-400/10 text-amber-400 font-medium">1</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 font-medium">2</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 font-medium">3</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300"><i class="fa-solid fa-chevron-right text-xs"></i></button>
            </div>
        </div>
    </div>
@endsection
