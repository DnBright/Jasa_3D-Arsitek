@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-8 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
        <div>
            <h1 class="text-3xl font-bold font-playfair mb-1">Selamat Datang, Admin!</h1>
            <p class="text-slate-400">Berikut adalah ringkasan performa studio 3D Anda hari ini.</p>
        </div>
        <button class="px-5 py-2.5 bg-gradient-to-r from-amber-500 to-amber-400 hover:from-amber-400 hover:to-amber-300 text-slate-950 font-semibold rounded-xl shadow-lg shadow-amber-500/20 transition-all flex items-center gap-2">
            <i class="fa-solid fa-plus"></i> Proyek Baru
        </button>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <!-- Stat Card 1 -->
        <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl p-6 relative overflow-hidden group hover:border-amber-400/30 transition-colors">
            <div class="absolute -right-6 -top-6 w-24 h-24 bg-amber-400/10 rounded-full blur-2xl group-hover:bg-amber-400/20 transition-colors"></div>
            <div class="flex justify-between items-start mb-4">
                <div>
                    <p class="text-slate-400 text-sm font-medium mb-1">Total Proyek</p>
                    <h3 class="text-3xl font-bold text-slate-50">124</h3>
                </div>
                <div class="w-10 h-10 rounded-lg bg-amber-400/10 text-amber-400 flex items-center justify-center border border-amber-400/20">
                    <i class="fa-solid fa-building"></i>
                </div>
            </div>
            <div class="flex items-center text-sm">
                <span class="text-emerald-400 flex items-center gap-1"><i class="fa-solid fa-arrow-trend-up"></i> +12%</span>
                <span class="text-slate-500 ml-2">dari bulan lalu</span>
            </div>
        </div>

        <!-- Stat Card 2 -->
        <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl p-6 relative overflow-hidden group hover:border-blue-400/30 transition-colors">
            <div class="absolute -right-6 -top-6 w-24 h-24 bg-blue-400/10 rounded-full blur-2xl group-hover:bg-blue-400/20 transition-colors"></div>
            <div class="flex justify-between items-start mb-4">
                <div>
                    <p class="text-slate-400 text-sm font-medium mb-1">Klien Aktif</p>
                    <h3 class="text-3xl font-bold text-slate-50">45</h3>
                </div>
                <div class="w-10 h-10 rounded-lg bg-blue-400/10 text-blue-400 flex items-center justify-center border border-blue-400/20">
                    <i class="fa-solid fa-users"></i>
                </div>
            </div>
            <div class="flex items-center text-sm">
                <span class="text-emerald-400 flex items-center gap-1"><i class="fa-solid fa-arrow-trend-up"></i> +5</span>
                <span class="text-slate-500 ml-2">klien baru</span>
            </div>
        </div>

        <!-- Stat Card 3 -->
        <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl p-6 relative overflow-hidden group hover:border-emerald-400/30 transition-colors">
            <div class="absolute -right-6 -top-6 w-24 h-24 bg-emerald-400/10 rounded-full blur-2xl group-hover:bg-emerald-400/20 transition-colors"></div>
            <div class="flex justify-between items-start mb-4">
                <div>
                    <p class="text-slate-400 text-sm font-medium mb-1">Pendapatan</p>
                    <h3 class="text-3xl font-bold text-slate-50">$24k</h3>
                </div>
                <div class="w-10 h-10 rounded-lg bg-emerald-400/10 text-emerald-400 flex items-center justify-center border border-emerald-400/20">
                    <i class="fa-solid fa-wallet"></i>
                </div>
            </div>
            <div class="flex items-center text-sm">
                <span class="text-emerald-400 flex items-center gap-1"><i class="fa-solid fa-arrow-trend-up"></i> +18%</span>
                <span class="text-slate-500 ml-2">dari bulan lalu</span>
            </div>
        </div>

        <!-- Stat Card 4 -->
        <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl p-6 relative overflow-hidden group hover:border-purple-400/30 transition-colors">
            <div class="absolute -right-6 -top-6 w-24 h-24 bg-purple-400/10 rounded-full blur-2xl group-hover:bg-purple-400/20 transition-colors"></div>
            <div class="flex justify-between items-start mb-4">
                <div>
                    <p class="text-slate-400 text-sm font-medium mb-1">Render Selesai</p>
                    <h3 class="text-3xl font-bold text-slate-50">892</h3>
                </div>
                <div class="w-10 h-10 rounded-lg bg-purple-400/10 text-purple-400 flex items-center justify-center border border-purple-400/20">
                    <i class="fa-solid fa-images"></i>
                </div>
            </div>
            <div class="flex items-center text-sm">
                <span class="text-slate-400">Total file render 3D</span>
            </div>
        </div>
    </div>

    <!-- Main Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Recent Projects Table -->
        <div class="lg:col-span-2 bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl overflow-hidden">
            <div class="p-6 border-b border-slate-800 flex items-center justify-between">
                <h2 class="text-xl font-bold font-playfair">Proyek Berjalan</h2>
                <button class="text-sm text-amber-400 hover:text-amber-300">Lihat Semua</button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-950/50 text-slate-400 text-sm border-b border-slate-800">
                            <th class="px-6 py-4 font-medium">Nama Proyek</th>
                            <th class="px-6 py-4 font-medium">Klien</th>
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
                                <button class="p-2 text-slate-400 hover:text-amber-400 transition-colors"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <p class="font-medium text-slate-200">Interior Urban Minimalist</p>
                                <p class="text-xs text-slate-500">Living Room & Kitchen</p>
                            </td>
                            <td class="px-6 py-4 text-slate-300">Bpk. Sudirman</td>
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
                                <button class="p-2 text-slate-400 hover:text-amber-400 transition-colors"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <p class="font-medium text-slate-200">Zenith Corporate HQ</p>
                                <p class="text-xs text-slate-500">Fasad & Lobi</p>
                            </td>
                            <td class="px-6 py-4 text-slate-300">Zenith Group</td>
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
                                <button class="p-2 text-slate-400 hover:text-amber-400 transition-colors"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <p class="font-medium text-slate-200">Oasis Residence</p>
                                <p class="text-xs text-slate-500">3D Floorplan & Lanskap</p>
                            </td>
                            <td class="px-6 py-4 text-slate-300">Ibu Kartika</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-xs font-medium bg-slate-700 text-slate-300 border border-slate-600">Pending</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-full bg-slate-800 rounded-full h-1.5 mb-1">
                                    <div class="bg-slate-500 h-1.5 rounded-full" style="width: 10%"></div>
                                </div>
                                <span class="text-xs text-slate-400">10%</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-2 text-slate-400 hover:text-amber-400 transition-colors"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right Sidebar Widgets -->
        <div class="space-y-6">
            
            <!-- Quick Actions -->
            <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl p-6">
                <h2 class="text-lg font-bold font-playfair mb-4">Aksi Cepat</h2>
                <div class="grid grid-cols-2 gap-3">
                    <button class="flex flex-col items-center justify-center gap-2 p-4 rounded-xl bg-slate-800/50 hover:bg-slate-800 border border-slate-700/50 hover:border-amber-400/30 transition-all group">
                        <i class="fa-solid fa-upload text-xl text-slate-400 group-hover:text-amber-400 transition-colors"></i>
                        <span class="text-xs font-medium text-slate-300">Upload File</span>
                    </button>
                    <button class="flex flex-col items-center justify-center gap-2 p-4 rounded-xl bg-slate-800/50 hover:bg-slate-800 border border-slate-700/50 hover:border-amber-400/30 transition-all group">
                        <i class="fa-solid fa-file-invoice text-xl text-slate-400 group-hover:text-amber-400 transition-colors"></i>
                        <span class="text-xs font-medium text-slate-300">Buat Invoice</span>
                    </button>
                    <button class="flex flex-col items-center justify-center gap-2 p-4 rounded-xl bg-slate-800/50 hover:bg-slate-800 border border-slate-700/50 hover:border-amber-400/30 transition-all group">
                        <i class="fa-solid fa-user-plus text-xl text-slate-400 group-hover:text-amber-400 transition-colors"></i>
                        <span class="text-xs font-medium text-slate-300">Klien Baru</span>
                    </button>
                    <button class="flex flex-col items-center justify-center gap-2 p-4 rounded-xl bg-slate-800/50 hover:bg-slate-800 border border-slate-700/50 hover:border-amber-400/30 transition-all group">
                        <i class="fa-solid fa-chart-line text-xl text-slate-400 group-hover:text-amber-400 transition-colors"></i>
                        <span class="text-xs font-medium text-slate-300">Laporan</span>
                    </button>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl p-6">
                <h2 class="text-lg font-bold font-playfair mb-4">Aktivitas Terkini</h2>
                <div class="space-y-4 relative before:absolute before:inset-0 before:ml-2.5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-slate-800 before:to-transparent">
                    
                    <!-- Activity Item -->
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                        <div class="flex items-center justify-center w-5 h-5 rounded-full border-2 border-slate-900 bg-amber-400 group-[.is-active]:bg-emerald-400 text-slate-900 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10"></div>
                        <div class="w-[calc(100%-2rem)] md:w-[calc(50%-1.5rem)] p-3 rounded-xl bg-slate-800/40 border border-slate-700/50">
                            <div class="flex items-center justify-between mb-1">
                                <div class="font-medium text-sm text-slate-200">Render Selesai</div>
                                <time class="text-xs text-slate-500">10 Min lalu</time>
                            </div>
                            <div class="text-xs text-slate-400">File <span class="text-amber-400">villa_lumina_v2.png</span> telah selesai di-render.</div>
                        </div>
                    </div>

                    <!-- Activity Item -->
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                        <div class="flex items-center justify-center w-5 h-5 rounded-full border-2 border-slate-900 bg-slate-700 group-[.is-active]:bg-emerald-400 text-slate-900 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10"></div>
                        <div class="w-[calc(100%-2rem)] md:w-[calc(50%-1.5rem)] p-3 rounded-xl bg-slate-800/40 border border-slate-700/50">
                            <div class="flex items-center justify-between mb-1">
                                <div class="font-medium text-sm text-slate-200">Komentar Klien</div>
                                <time class="text-xs text-slate-500">2 Jam lalu</time>
                            </div>
                            <div class="text-xs text-slate-400">Bpk. Sudirman meminta revisi pencahayaan.</div>
                        </div>
                    </div>

                    <!-- Activity Item -->
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                        <div class="flex items-center justify-center w-5 h-5 rounded-full border-2 border-slate-900 bg-slate-700 group-[.is-active]:bg-emerald-400 text-slate-900 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10"></div>
                        <div class="w-[calc(100%-2rem)] md:w-[calc(50%-1.5rem)] p-3 rounded-xl bg-slate-800/40 border border-slate-700/50">
                            <div class="flex items-center justify-between mb-1">
                                <div class="font-medium text-sm text-slate-200">Invoice Dibayar</div>
                                <time class="text-xs text-slate-500">Kemarin</time>
                            </div>
                            <div class="text-xs text-slate-400">Pembayaran DP untuk Zenith Corporate diterima.</div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
@endsection
