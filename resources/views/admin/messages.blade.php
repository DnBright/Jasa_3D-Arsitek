@extends('layouts.admin')

@section('title', 'Pesan & Komunikasi')

@section('content')
    <div class="mb-8 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
        <div>
            <h1 class="text-3xl font-bold font-playfair mb-1">Kotak Masuk</h1>
            <p class="text-slate-400">Komunikasi dengan klien dan tim Anda.</p>
        </div>
        <button class="px-5 py-2.5 bg-gradient-to-r from-amber-500 to-amber-400 hover:from-amber-400 hover:to-amber-300 text-slate-950 font-semibold rounded-xl shadow-lg shadow-amber-500/20 transition-all flex items-center gap-2">
            <i class="fa-solid fa-pen"></i> Tulis Pesan
        </button>
    </div>

    <!-- Messages Layout (Split Pane) -->
    <div class="flex flex-col lg:flex-row gap-6 h-[calc(100vh-250px)]">
        
        <!-- Left Pane (Chat List) -->
        <div class="w-full lg:w-1/3 flex flex-col bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl overflow-hidden h-full">
            <div class="p-4 border-b border-slate-800">
                <div class="relative">
                    <i class="fa-solid fa-search absolute left-3 top-1/2 -translate-y-1/2 text-slate-500 text-sm"></i>
                    <input type="text" placeholder="Cari pesan..." class="w-full pl-9 pr-4 py-2 bg-slate-800/50 border border-slate-700/50 rounded-xl text-sm focus:outline-none focus:border-amber-400/50 text-slate-200">
                </div>
            </div>
            
            <div class="flex-1 overflow-y-auto divide-y divide-slate-800/50">
                <!-- Chat Item (Active) -->
                <div class="p-4 bg-slate-800/50 hover:bg-slate-800/80 cursor-pointer transition-colors border-l-2 border-amber-400">
                    <div class="flex items-start justify-between mb-1">
                        <h4 class="font-bold text-slate-200">Bpk. Sudirman</h4>
                        <span class="text-xs text-amber-400">10:42 AM</span>
                    </div>
                    <p class="text-sm text-slate-400 line-clamp-2">Halo tim, untuk revisi pencahayaan ruang tamunya bisa dibuat sedikit lebih warm ya? Terima kasih.</p>
                </div>
                
                <!-- Chat Item -->
                <div class="p-4 hover:bg-slate-800/50 cursor-pointer transition-colors border-l-2 border-transparent">
                    <div class="flex items-start justify-between mb-1">
                        <h4 class="font-bold text-slate-200">PT. Adhi Karya <span class="ml-2 w-2 h-2 inline-block bg-amber-400 rounded-full"></span></h4>
                        <span class="text-xs text-slate-500">Kemarin</span>
                    </div>
                    <p class="text-sm text-slate-400 line-clamp-2">File render final sudah kami terima. Kualitasnya sangat memuaskan, invoice akan segera kami proses.</p>
                </div>

                <!-- Chat Item -->
                <div class="p-4 hover:bg-slate-800/50 cursor-pointer transition-colors border-l-2 border-transparent">
                    <div class="flex items-start justify-between mb-1">
                        <h4 class="font-bold text-slate-200">Zenith Group</h4>
                        <span class="text-xs text-slate-500">Senin</span>
                    </div>
                    <p class="text-sm text-slate-400 line-clamp-2">Mohon update progress untuk area lobi utama. Apakah sudah masuk tahap rendering akhir?</p>
                </div>
            </div>
        </div>

        <!-- Right Pane (Chat View) -->
        <div class="w-full lg:w-2/3 flex flex-col bg-slate-900/60 backdrop-blur-md border border-slate-800 rounded-2xl overflow-hidden h-full">
            <!-- Chat Header -->
            <div class="p-4 border-b border-slate-800 flex items-center justify-between bg-slate-900/80">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center font-bold text-slate-300">S</div>
                    <div>
                        <h3 class="font-bold text-slate-200">Bpk. Sudirman</h3>
                        <p class="text-xs text-emerald-400">Online</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <button class="p-2 text-slate-400 hover:text-amber-400 transition-colors"><i class="fa-solid fa-phone"></i></button>
                    <button class="p-2 text-slate-400 hover:text-amber-400 transition-colors"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                </div>
            </div>
            
            <!-- Chat Body -->
            <div class="flex-1 overflow-y-auto p-6 space-y-6">
                <!-- Message Left -->
                <div class="flex gap-4 max-w-[80%]">
                    <div class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center text-xs font-bold shrink-0">S</div>
                    <div>
                        <div class="bg-slate-800/80 p-3 rounded-2xl rounded-tl-none border border-slate-700/50 text-sm text-slate-300">
                            Selamat pagi. Saya sudah melihat draft render untuk interior rumahnya.
                        </div>
                        <span class="text-xs text-slate-500 mt-1 ml-1 block">10:35 AM</span>
                    </div>
                </div>

                <!-- Message Left -->
                <div class="flex gap-4 max-w-[80%]">
                    <div class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center text-xs font-bold shrink-0">S</div>
                    <div>
                        <div class="bg-slate-800/80 p-3 rounded-2xl rounded-tl-none border border-slate-700/50 text-sm text-slate-300">
                            Halo tim, untuk revisi pencahayaan ruang tamunya bisa dibuat sedikit lebih warm ya? Terima kasih.
                        </div>
                        <span class="text-xs text-slate-500 mt-1 ml-1 block">10:42 AM</span>
                    </div>
                </div>

                <!-- Divider -->
                <div class="flex items-center justify-center py-2">
                    <span class="text-xs font-medium text-slate-500 bg-slate-900/50 px-3 py-1 rounded-full border border-slate-800">Hari ini</span>
                </div>

                <!-- Message Right -->
                <div class="flex gap-4 max-w-[80%] ml-auto flex-row-reverse">
                    <div class="w-8 h-8 rounded-full bg-amber-400 flex items-center justify-center text-slate-900 text-xs font-bold shrink-0">A</div>
                    <div>
                        <div class="bg-amber-400 p-3 rounded-2xl rounded-tr-none text-sm text-slate-900 font-medium">
                            Selamat pagi Pak Sudirman. Baik, kami akan segera menyesuaikan temperatur cahaya lampu di area ruang tamu menjadi lebih warm. Estimasi selesai nanti sore.
                        </div>
                        <span class="text-xs text-slate-500 mt-1 mr-1 block text-right">10:50 AM <i class="fa-solid fa-check-double text-emerald-400 ml-1"></i></span>
                    </div>
                </div>
            </div>
            
            <!-- Chat Input -->
            <div class="p-4 border-t border-slate-800 bg-slate-900/80">
                <div class="flex items-center gap-2">
                    <button class="p-2 text-slate-400 hover:text-amber-400 transition-colors"><i class="fa-solid fa-paperclip"></i></button>
                    <input type="text" placeholder="Ketik pesan balasan..." class="flex-1 bg-slate-800/50 border border-slate-700/50 rounded-full px-4 py-2 text-sm focus:outline-none focus:border-amber-400/50 text-slate-200">
                    <button class="p-2.5 bg-amber-400 hover:bg-amber-300 text-slate-900 rounded-full transition-colors"><i class="fa-solid fa-paper-plane text-sm"></i></button>
                </div>
            </div>
        </div>

    </div>
@endsection
