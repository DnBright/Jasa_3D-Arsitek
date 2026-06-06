@extends('layouts.admin')

@section('title', 'Pengaturan')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold font-playfair mb-1">Pengaturan Sistem</h1>
        <p class="text-slate-400">Kelola profil, preferensi notifikasi, dan keamanan akun Anda.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        
        <!-- Settings Sidebar -->
        <div class="lg:col-span-1">
            <nav class="space-y-1">
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-slate-800/80 text-amber-400 font-medium border border-slate-700/50 border-l-2 border-l-amber-400 transition-colors">
                    <i class="fa-regular fa-user w-5 text-center"></i> Profil Saya
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800/50 hover:text-slate-200 border border-transparent transition-colors">
                    <i class="fa-solid fa-shield-halved w-5 text-center"></i> Keamanan
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800/50 hover:text-slate-200 border border-transparent transition-colors">
                    <i class="fa-regular fa-bell w-5 text-center"></i> Notifikasi
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800/50 hover:text-slate-200 border border-transparent transition-colors">
                    <i class="fa-solid fa-palette w-5 text-center"></i> Tampilan
                </a>
            </nav>
        </div>

        <!-- Settings Form -->
        <div class="lg:col-span-3 space-y-6">
            
            <!-- Profile Info Card -->
            <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl p-6 md:p-8">
                <h2 class="text-xl font-bold font-playfair mb-6 text-slate-200 border-b border-slate-800 pb-4">Informasi Pribadi</h2>
                
                <div class="flex flex-col md:flex-row gap-8 mb-8">
                    <div class="flex flex-col items-center gap-4">
                        <div class="w-32 h-32 rounded-full bg-gradient-to-tr from-amber-500 to-amber-300 flex items-center justify-center text-4xl text-slate-900 font-bold shadow-lg shadow-amber-500/20">
                            A
                        </div>
                        <button class="px-4 py-2 bg-slate-800 hover:bg-slate-700 text-slate-300 text-sm font-medium rounded-lg border border-slate-700 transition-colors">Ubah Foto</button>
                    </div>
                    
                    <div class="flex-1 space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-400 mb-1">Nama Depan</label>
                                <input type="text" value="Admin" class="w-full bg-slate-800/50 border border-slate-700/50 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-amber-400/50 text-slate-200">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-400 mb-1">Nama Belakang</label>
                                <input type="text" value="ArchiVision" class="w-full bg-slate-800/50 border border-slate-700/50 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-amber-400/50 text-slate-200">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-400 mb-1">Email Publik</label>
                            <input type="email" value="admin@archivision.com" class="w-full bg-slate-800/50 border border-slate-700/50 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-amber-400/50 text-slate-200">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-400 mb-1">Peran Jabatan</label>
                            <input type="text" value="Lead 3D Visualizer" class="w-full bg-slate-800/50 border border-slate-700/50 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-amber-400/50 text-slate-200">
                        </div>
                    </div>
                </div>

                <div class="flex justify-end pt-4 border-t border-slate-800">
                    <button class="px-6 py-2.5 bg-amber-400 hover:bg-amber-300 text-slate-900 font-bold rounded-xl shadow-lg shadow-amber-400/20 transition-colors">Simpan Perubahan</button>
                </div>
            </div>

            <!-- Company Info Card -->
            <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl p-6 md:p-8">
                <h2 class="text-xl font-bold font-playfair mb-6 text-slate-200 border-b border-slate-800 pb-4">Profil Studio</h2>
                
                <div class="space-y-4 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-400 mb-1">Nama Studio</label>
                        <input type="text" value="ArchiVision 3D Studio" class="w-full bg-slate-800/50 border border-slate-700/50 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-amber-400/50 text-slate-200">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-400 mb-1">Alamat Studio</label>
                        <textarea rows="3" class="w-full bg-slate-800/50 border border-slate-700/50 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-amber-400/50 text-slate-200 resize-none">Gedung Arsitektur, Lt. 3, Jakarta Selatan</textarea>
                    </div>
                </div>

                <div class="flex justify-end pt-4 border-t border-slate-800">
                    <button class="px-6 py-2.5 bg-amber-400 hover:bg-amber-300 text-slate-900 font-bold rounded-xl shadow-lg shadow-amber-400/20 transition-colors">Perbarui Profil</button>
                </div>
            </div>

        </div>
    </div>
@endsection
