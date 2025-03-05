<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-48 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <div class="flex flex-col text-center items-center pb-1 border-b-2 border-yellow-500 mt-2 mb-8 mx-2 gap-1">
            <h1 class="text-md text-[#00593b] font-semibold text-center">BAZNAS CILACAP</h1>
            <h3 class="text-[12px] font-medium">{{ Auth::user()->nama }}</h3>
            <div class="bg-[#00593b] rounded-[5px] px-1 py-[2px]">
                <h2 class="text-[12px] text-white">{{ Auth::user()->pengurus->jabatan->jabatan }}</h2>
            </div>
            <div class="flex justify-between items-center w-full">
                <a href="#" class="flex items-center gap-0.5">
                    <img src="{{ asset('build/icons/setting.png') }}" class="w-3 h-3 filter-green" alt="">
                    <p class="text-[10px] text-[#00593b] font-medium">Pengaturan</p>
                </a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center gap-0.5">
                        <img src="{{ asset('build/icons/logout.png') }}" class="w-3 h-3 filter-green" alt="">
                        <p class="text-[10px] text-[#00593b] font-medium">Keluar</p>
                    </button>
                </form>
            </div>
        </div>

        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center p-2 rounded-md shadow-md text-[#00593b] transition-all {{ request()->routeIs('dashboard') ? 'bg-[#00593b] text-white' : '' }}">
                    {{-- <img src="{{ asset('build/icons/document.svg') }}" class="w-5 h-5 filter-green {{ request()->routeIs('dashboard') ? 'filter-white' : 'group-hover:filter-green-hover' }}" alt="Document Icon"> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 {{ request()->routeIs('dashboard') ? 'filter-white' : 'group-hover:filter-green-hover' }}">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                      </svg>                      
                    <span class="ms-3 text-xs font-light">Dashboard</span>
                </a>                
            </li>
            
            <li><span class="text-xs font-semibold text-gray-500 ml-4">E-Disday</span></li>

            <li>
                <a href="{{ route('permohonan.index') }}" class="flex items-center p-2 rounded-md shadow-md text-[#00593b] transition-all group {{ request()->routeIs('permohonan.*') ? 'bg-[#00593b] text-white' : '' }}">
                    {{-- <img src="{{ asset('build/icons/document.svg') }}" class="w-5 h-5 filter-green group-hover:filter-green-hover {{ request()->routeIs('permohonan.*') ? 'filter-white' : '' }}" alt="Document Icon"> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 {{ request()->routeIs('permohonan.*') ? 'filter-white' : 'group-hover:filter-green-hover' }}">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                      </svg>
                    <span class="ms-3 text-xs font-light">Data Permohonan</span>
                </a>
            </li>
            
            <li><span class="text-xs font-semibold text-gray-500 ml-4">Data Master</span></li>

            <li>
                <a href="{{ route('program') }}" class="flex items-center p-2 rounded-md shadow-md text-[#00593b] transition-all group {{ request()->routeIs('program') ? 'bg-[#00593b] text-white' : '' }}">
                    {{-- <img src="{{ asset('build/icons/document.svg') }}" class="w-5 h-5 filter-green group-hover:filter-green-hover {{ request()->routeIs('program') ? 'filter-white' : '' }}" alt="Document Icon"> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 {{ request()->routeIs('program') ? 'filter-white' : 'group-hover:filter-green-hover' }}">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                      </svg>
                    <span class="ms-3 text-xs font-light">Data Program</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
