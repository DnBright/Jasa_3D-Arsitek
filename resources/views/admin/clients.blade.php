@extends('layouts.admin')

@section('title', 'Klien')

@section('content')
    <div class="mb-8 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
        <div>
            <h1 class="text-3xl font-bold font-playfair mb-1">Daftar Klien</h1>
            <p class="text-slate-400">Kelola informasi kontak dan detail klien studio Anda.</p>
        </div>
        <button class="px-5 py-2.5 bg-gradient-to-r from-amber-500 to-amber-400 hover:from-amber-400 hover:to-amber-300 text-slate-950 font-semibold rounded-xl shadow-lg shadow-amber-500/20 transition-all flex items-center gap-2">
            <i class="fa-solid fa-user-plus"></i> Tambah Klien
        </button>
    </div>

    <!-- Client Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Client Card 1 -->
        <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl p-6 group hover:border-amber-400/30 transition-colors">
            <div class="flex justify-between items-start mb-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center text-xl font-bold text-slate-300">
                        AK
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-200">PT. Adhi Karya</h3>
                        <p class="text-xs text-slate-400">Corporate</p>
                    </div>
                </div>
                <button class="p-2 text-slate-400 hover:text-amber-400 transition-colors"><i class="fa-solid fa-ellipsis-vertical"></i></button>
            </div>
            
            <div class="space-y-3 mb-6">
                <div class="flex items-center gap-3 text-sm text-slate-300">
                    <i class="fa-solid fa-envelope w-4 text-slate-500"></i> contact@adhikarya.com
                </div>
                <div class="flex items-center gap-3 text-sm text-slate-300">
                    <i class="fa-solid fa-phone w-4 text-slate-500"></i> +62 812-3456-7890
                </div>
                <div class="flex items-center gap-3 text-sm text-slate-300">
                    <i class="fa-solid fa-location-dot w-4 text-slate-500"></i> Jakarta Selatan, ID
                </div>
            </div>
            
            <div class="pt-4 border-t border-slate-800 flex items-center justify-between">
                <div class="text-center">
                    <p class="text-xs text-slate-500 mb-1">Total Proyek</p>
                    <p class="font-bold text-slate-200">12</p>
                </div>
                <div class="text-center border-l border-r border-slate-800 px-4">
                    <p class="text-xs text-slate-500 mb-1">Aktif</p>
                    <p class="font-bold text-amber-400">1</p>
                </div>
                <div class="text-center">
                    <p class="text-xs text-slate-500 mb-1">Total Nilai</p>
                    <p class="font-bold text-emerald-400">$8k</p>
                </div>
            </div>
        </div>

        <!-- Client Card 2 -->
        <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl p-6 group hover:border-amber-400/30 transition-colors">
            <div class="flex justify-between items-start mb-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center text-xl font-bold text-slate-300">
                        S
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-200">Bpk. Sudirman</h3>
                        <p class="text-xs text-slate-400">Individual</p>
                    </div>
                </div>
                <button class="p-2 text-slate-400 hover:text-amber-400 transition-colors"><i class="fa-solid fa-ellipsis-vertical"></i></button>
            </div>
            
            <div class="space-y-3 mb-6">
                <div class="flex items-center gap-3 text-sm text-slate-300">
                    <i class="fa-solid fa-envelope w-4 text-slate-500"></i> sudirman.arch@gmail.com
                </div>
                <div class="flex items-center gap-3 text-sm text-slate-300">
                    <i class="fa-solid fa-phone w-4 text-slate-500"></i> +62 856-7890-1234
                </div>
                <div class="flex items-center gap-3 text-sm text-slate-300">
                    <i class="fa-solid fa-location-dot w-4 text-slate-500"></i> Bandung, ID
                </div>
            </div>
            
            <div class="pt-4 border-t border-slate-800 flex items-center justify-between">
                <div class="text-center">
                    <p class="text-xs text-slate-500 mb-1">Total Proyek</p>
                    <p class="font-bold text-slate-200">3</p>
                </div>
                <div class="text-center border-l border-r border-slate-800 px-4">
                    <p class="text-xs text-slate-500 mb-1">Aktif</p>
                    <p class="font-bold text-amber-400">1</p>
                </div>
                <div class="text-center">
                    <p class="text-xs text-slate-500 mb-1">Total Nilai</p>
                    <p class="font-bold text-emerald-400">$1.2k</p>
                </div>
            </div>
        </div>

        <!-- Client Card 3 -->
        <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl p-6 group hover:border-amber-400/30 transition-colors">
            <div class="flex justify-between items-start mb-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center text-xl font-bold text-slate-300">
                        ZG
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-200">Zenith Group</h3>
                        <p class="text-xs text-slate-400">Corporate</p>
                    </div>
                </div>
                <button class="p-2 text-slate-400 hover:text-amber-400 transition-colors"><i class="fa-solid fa-ellipsis-vertical"></i></button>
            </div>
            
            <div class="space-y-3 mb-6">
                <div class="flex items-center gap-3 text-sm text-slate-300">
                    <i class="fa-solid fa-envelope w-4 text-slate-500"></i> hello@zenithgroup.com
                </div>
                <div class="flex items-center gap-3 text-sm text-slate-300">
                    <i class="fa-solid fa-phone w-4 text-slate-500"></i> +62 21-555-0198
                </div>
                <div class="flex items-center gap-3 text-sm text-slate-300">
                    <i class="fa-solid fa-location-dot w-4 text-slate-500"></i> Surabaya, ID
                </div>
            </div>
            
            <div class="pt-4 border-t border-slate-800 flex items-center justify-between">
                <div class="text-center">
                    <p class="text-xs text-slate-500 mb-1">Total Proyek</p>
                    <p class="font-bold text-slate-200">5</p>
                </div>
                <div class="text-center border-l border-r border-slate-800 px-4">
                    <p class="text-xs text-slate-500 mb-1">Aktif</p>
                    <p class="font-bold text-amber-400">2</p>
                </div>
                <div class="text-center">
                    <p class="text-xs text-slate-500 mb-1">Total Nilai</p>
                    <p class="font-bold text-emerald-400">$15k</p>
                </div>
            </div>
        </div>

    </div>
@endsection
