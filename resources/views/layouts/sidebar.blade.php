<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <div class="flex flex-col items-center pb-2 border-b-2 border-yellow-500 mt-2 mb-8 mx-7 gap-1">
            <h1 class="text-xl text-[#00593b] font-bold">BAZNAS CILACAP</h1>
            <h3 class="text-md font-medium">{{ Auth::user()->nama }}</h3>
            <div class="bg-[#00593b] rounded-md">
                <h2 class="text-sm text-white mx-2 my-1">{{ Auth::user()->pengurus->jabatan->jabatan }}</h2>
            </div>
            <div class="flex justify-between items-center w-full">
                <a href="#" class="flex items-center gap-1">
                    <img src="{{ asset('build/icons/setting.png') }}" class="w-4 h-4 filter-green" alt="">
                    <p class="text-sm text-[#00593b] font-medium">Pengaturan</p>
                </a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center gap-1">
                        <img src="{{ asset('build/icons/logout.png') }}" class="w-4 h-4 filter-green" alt="">
                        <p class="text-sm text-[#00593b] font-medium">Keluar</p>
                    </button>
                </form>
            </div>
        </div>

        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center p-3 rounded-lg shadow-md text-[#00593b] transition-all {{ request()->routeIs('dashboard') ? 'bg-[#00593b] text-white' : '' }}">
                    <img src="{{ asset('build/icons/document.svg') }}" class="w-5 h-5 filter-green {{ request()->routeIs('dashboard') ? 'filter-white' : 'group-hover:filter-green-hover' }}" alt="Document Icon">
                    <span class="ms-3 text-sm font-light">Dashboard</span>
                </a>                
            </li>
            
            <li><span class="text-sm font-semibold text-gray-500">E-Disday</span></li>

            <li>
                <a href="#" class="flex items-center p-3 rounded-lg shadow-md bg-white text-[#00593b] hover:bg-gray-100 transition-all group {{ request()->routeIs('permohonan') ? 'bg-[#00593b] text-white' : '' }}">
                    <img src="{{ asset('build/icons/document.svg') }}" class="w-5 h-5 filter-green group-hover:filter-green-hover {{ request()->routeIs('permohonan') ? 'filter-white' : '' }}" alt="Document Icon">
                    <span class="ms-3 text-sm font-light">Data Permohonan</span>
                </a>
            </li>
            
            <li><span class="text-sm font-semibold text-gray-500">Data Master</span></li>

            <li>
                <a href="{{ route('program') }}" class="flex items-center p-3 rounded-lg shadow-md text-[#00593b] transition-all group {{ request()->routeIs('program') ? 'bg-[#00593b] text-white' : '' }}">
                    <img src="{{ asset('build/icons/document.svg') }}" class="w-5 h-5 filter-green group-hover:filter-green-hover {{ request()->routeIs('program') ? 'filter-white' : '' }}" alt="Document Icon">
                    <span class="ms-3 text-sm font-light">Data Program</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
