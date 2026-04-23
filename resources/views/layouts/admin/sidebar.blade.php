<button id="toggleSidebar"
    class="xl:hidden fixed top-5 left-5 z-[60] p-3 bg-white border border-gray-100 rounded-xl shadow-xl hover:bg-gray-50 transition-all active:scale-95">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</button>

<div id="overlay"
    class="fixed inset-0 bg-gray-900/40 backdrop-blur-sm hidden z-40 xl:hidden transition-opacity duration-300">
</div>

<aside id="sidebar"
    class="fixed inset-y-0 left-0 z-50 w-72 bg-white border-r border-gray-100 shadow-2xl xl:shadow-none
    transform -translate-x-full xl:translate-x-0 transition-all duration-300 ease-in-out flex flex-col">

    <div class="flex items-center gap-3 px-8 py-10">
        <div class="p-1.5 bg-transparent rounded-xl">
            <img src="{{ asset('assets-admin/img/logo-ct.png') }}" alt="Logo" class="h-10 w-auto">
        </div>
        <span class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-gray-600 tracking-tight">
            GuardianNet
        </span>
    </div>

    <nav class="flex-1 px-4 pb-6 overflow-y-auto custom-scrollbar">
        <ul class="flex flex-col space-y-1.5">
            <li>
                <a href="{{ route('dashboard') }}"
                   class="group flex items-center gap-3 px-4 py-3.5 text-indigo-600 bg-indigo-50/50 rounded-xl border border-indigo-100/50 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor"
                         stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8v-10h-8v10zm0-18v6h8V3h-8z"/>
                    </svg>
                    <span class="font-bold tracking-wide">Dashboard</span>
                </a>
            </li>

            <li class="mt-6 mb-2 px-4 text-[11px] font-bold text-gray-400 uppercase tracking-[0.15em]">Fitur Utama</li>

            <li>
                <a href="{{ route('kejadian_bencana.index') }}"
                   class="group flex items-center gap-3 px-4 py-3.5 text-gray-500 rounded-xl hover:bg-red-50 hover:text-red-600 transition-all duration-200">
                    <div class="p-1 rounded-lg group-hover:bg-red-100 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 21h22L12 2 1 21z"/>
                            <path d="M12 16v-2"/>
                            <path d="M12 12v-4"/>
                        </svg>
                    </div>
                    <span class="font-medium">Kejadian Bencana</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.posko.index') }}"
                   class="group flex items-center gap-3 px-4 py-3.5 text-gray-500 rounded-xl hover:bg-orange-50 hover:text-orange-600 transition-all duration-200">
                    <div class="p-1 rounded-lg group-hover:bg-orange-100 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 19h18l-9-15-9 15z"/>
                            <path d="M10 17h4v2h-4z"/>
                        </svg>
                    </div>
                    <span class="font-medium">Posko Bencana</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.donasi.index') }}"
                   class="group flex items-center gap-3 px-4 py-3.5 text-gray-500 rounded-xl hover:bg-emerald-50 hover:text-emerald-600 transition-all duration-200">
                    <div class="p-1 rounded-lg group-hover:bg-emerald-100 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M11 11h2v6h-2z"/>
                            <path d="M11 17h2v2h-2z"/>
                        </svg>
                    </div>
                    <span class="font-medium">Donasi Bencana</span>
                </a>
            </li>

            <li>
                <a href="{{ route('logistik.index') }}"
                   class="group flex items-center gap-3 px-4 py-3.5 text-gray-500 rounded-xl hover:bg-blue-50 hover:text-blue-600 transition-all duration-200">
                    <div class="p-1 rounded-lg group-hover:bg-blue-100 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="5" cy="16" r="2"/>
                            <circle cx="19" cy="16" r="2"/>
                            <path d="M1 3h14v10H1z"/>
                            <path d="M16 3h7l3 3v5h-7z"/>
                        </svg>
                    </div>
                    <span class="font-medium">Logistik Bencana</span>
                </a>
            </li>

            <li>
                <a href="{{ route('distribusi.index') }}"
                   class="group flex items-center gap-3 px-4 py-3.5 text-gray-500 rounded-xl hover:bg-blue-50 hover:text-blue-600 transition-all duration-200">
                    <div class="p-1 rounded-lg group-hover:bg-blue-100 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 3h18v4H3z"/>
                            <path d="M3 7l9 6 9-6"/>
                            <path d="M3 7v14h18V7"/>
                        </svg>
                    </div>
                    <span class="font-medium">Distribusi Logistik</span>
                </a>
            </li>

            <li class="mt-6 mb-2 px-4 text-[11px] font-bold text-gray-400 uppercase tracking-[0.15em]">Master Data</li>

            <li>
                <a href="{{ route('warga.index') }}"
                   class="group flex items-center gap-3 px-4 py-3.5 text-gray-500 rounded-xl hover:bg-indigo-50 hover:text-indigo-600 transition-all duration-200">
                    <div class="p-1 rounded-lg group-hover:bg-indigo-100 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3z"/>
                            <path d="M8 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3z"/>
                            <path d="M1 20v-1.5C1 16.17 5.67 15 8 15s7 1.17 7 3.5V20H1z"/>
                        </svg>
                    </div>
                    <span class="font-medium">Warga</span>
                </a>
            </li>

            <li>
                <a href="{{ route('user.index') }}"
                   class="group flex items-center gap-3 px-4 py-3.5 text-gray-500 rounded-xl hover:bg-indigo-50 hover:text-indigo-600 transition-all duration-200">
                    <div class="p-1 rounded-lg group-hover:bg-indigo-100 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 12c2.67 0 8 1.34 8 4v4H4v-4c0-2.66 5.33-4 8-4z"/>
                            <path d="M12 6a4 4 0 100-8 4 4 0 000 8z"/>
                        </svg>
                    </div>
                    <span class="font-medium">User</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="p-4 border-t border-gray-100 bg-gray-50/50">
        <div class="flex items-center gap-3 p-2">
            <div class="h-10 w-10 rounded-full bg-indigo-600 flex items-center justify-center text-white font-bold shadow-sm">
                A
            </div>
            <div class="flex flex-col">
                <span class="text-sm font-bold text-gray-800">Admin</span>
                <span class="text-xs text-gray-500">Administrator System</span>
            </div>
        </div>
    </div>
</aside>

<style>
    /* Agar scrollbar di menu navigasi tipis dan cantik */
    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #e5e7eb;
        border-radius: 10px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #d1d5db;
    }
</style>

<script>
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    const overlay = document.getElementById('overlay');

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    });

    overlay.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });
</script>
