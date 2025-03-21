<aside
    :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
    class="sidebar fixed left-0 top-[64px] z-40 flex h-full w-[290px] flex-col overflow-y-hidden border-r border-gray-200 bg-white sm:bg-white px-5 dark:border-gray-800 dark:bg-black lg:static lg:translate-x-0">
    <!-- SIDEBAR HEADER -->
    <div
        :class="sidebarToggle ? 'justify-center' : 'justify-between'"
        class="flex items-center gap-2 pt-8 sidebar-header pb-7 hidden sm:block">
        <a href="{{ route('dashboard') }}">
            <h1 class="text-4xl text-center text-[#00593b] font-bold">e-Disday</h1>
        </a>
    </div>
    <!-- SIDEBAR HEADER -->

    <div
        class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar">
        <!-- Sidebar Menu -->
        <nav x-data="{selected: $persist('Dashboard')}">
            <!-- Menu Group -->
            <div>
                <h3 class="mb-4 text-xs uppercase leading-[20px] text-gray-400">
                    <span class="menu-group-title" :class="sidebarToggle ? 'lg:hidden' : ''">
                        MENU
                    </span>
                </h3>

                <ul class="flex flex-col gap-4 mb-6">
                    <!-- Menu Item Dashboard -->
                    <li>
                        <a
                            href="{{ route('dashboard') }}"
                            class="flex items-center p-2 rounded-md shadow-md text-[#00593b] transition-all {{ request()->routeIs('dashboard') ? 'bg-[#00593b] text-white' : '' }}">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-4 {{ request()->routeIs('dashboard') ? 'filter-white' : 'group-hover:filter-green-hover' }}">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                            </svg>
                            <span class="ms-3 text-xs font-light">Dashboard</span>
                        </a>
                    </li>
                    <!-- Menu Item Dashboard -->

                    <!-- Menu Item Calendar -->
                    <li>
                        <a
                            href="{{ route('permohonan.index') }}"
                            class="flex items-center p-2 rounded-md shadow-md text-[#00593b] transition-all {{ request()->routeIs('permohonan.*') ? 'bg-[#00593b] text-white' : '' }}">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-4 {{ request()->routeIs('permohonan.*') ? 'filter-white' : 'group-hover:filter-green-hover' }}">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                            </svg>
                            <span class="ms-3 text-xs font-light">Permohonan</span>
                        </a>
                    </li>
                    <li>
                      <h3 class=" text-xs uppercase leading-[20px] text-gray-400">
                        <span class="menu-group-title" :class="sidebarToggle ? 'lg:hidden' : ''">
                          DATA MASTER
                        </span>
                      </h3>
                    </li>
                    <li>
                        <a
                            href="{{ route('program.index') }}"
                            class="flex items-center p-2 rounded-md shadow-md text-[#00593b] transition-all {{ request()->routeIs('program.*') ? 'bg-[#00593b] text-white' : '' }}">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-4 {{ request()->routeIs('program.*') ? 'filter-white' : 'group-hover:filter-green-hover' }}">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                            </svg>
                            <span class="ms-3 text-xs font-light">Program</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('divisi.index') }}"
                            class="flex items-center p-2 rounded-md shadow-md text-[#00593b] transition-all {{ request()->routeIs('divisi.*') ? 'bg-[#00593b] text-white' : '' }}">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-4 {{ request()->routeIs('divisi.*') ? 'filter-white' : 'group-hover:filter-green-hover' }}">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                            </svg>
                            <span class="ms-3 text-xs font-light">Divisi</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('pengurus.index') }}"
                            class="flex items-center p-2 rounded-md shadow-md text-[#00593b] transition-all {{ request()->routeIs('pengurus.*') ? 'bg-[#00593b] text-white' : '' }}">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-4 {{ request()->routeIs('pengurus.*') ? 'filter-white' : 'group-hover:filter-green-hover' }}">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                            </svg>
                            <span class="ms-3 text-xs font-light">Pengurus</span>
                        </a>
                    </li>
                    <!-- Menu Item Calendar -->
                </ul>
            </div>
        </nav>
    </div>
</aside>