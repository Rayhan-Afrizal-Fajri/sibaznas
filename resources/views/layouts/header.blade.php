<style>
    [x-cloak] { display: none !important; }
</style>

<header
    x-data="{menuToggle: false}"
    class="sticky top-0 z-99999 flex w-full border-gray-200 bg-white lg:border-b dark:border-gray-800 dark:bg-gray-900">
    <div
        class="flex grow flex-col items-center justify-between lg:flex-row lg:px-6">
        <div
            class="flex w-full items-center justify-between gap-2 border-b border-gray-200 px-3 py-3 sm:gap-4 lg:justify-normal lg:border-b-0 lg:px-0 lg:py-4 dark:border-gray-800">
            <!-- Hamburger Toggle BTN -->
            <button
                :class="sidebarToggle ? 'lg:bg-transparent bg-gray-100' : ''"
                class="z-99999 flex h-10 w-10 items-center justify-center rounded-lg border-gray-200 text-gray-500 lg:h-11 lg:w-11 lg:border block sm:hidden"
                @click.stop="sidebarToggle = !sidebarToggle">
                <svg
                    class="hidden fill-current lg:block"
                    width="16"
                    height="12"
                    viewBox="0 0 16 12"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.583252 1C0.583252 0.585788 0.919038 0.25 1.33325 0.25H14.6666C15.0808 0.25 15.4166 0.585786 15.4166 1C15.4166 1.41421 15.0808 1.75 14.6666 1.75L1.33325 1.75C0.919038 1.75 0.583252 1.41422 0.583252 1ZM0.583252 11C0.583252 10.5858 0.919038 10.25 1.33325 10.25L14.6666 10.25C15.0808 10.25 15.4166 10.5858 15.4166 11C15.4166 11.4142 15.0808 11.75 14.6666 11.75L1.33325 11.75C0.919038 11.75 0.583252 11.4142 0.583252 11ZM1.33325 5.25C0.919038 5.25 0.583252 5.58579 0.583252 6C0.583252 6.41421 0.919038 6.75 1.33325 6.75L7.99992 6.75C8.41413 6.75 8.74992 6.41421 8.74992 6C8.74992 5.58579 8.41413 5.25 7.99992 5.25L1.33325 5.25Z"
                        fill=""/>
                </svg>

                <svg
                    :class="sidebarToggle ? 'hidden' : 'block lg:hidden'"
                    class="fill-current lg:hidden"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M3.25 6C3.25 5.58579 3.58579 5.25 4 5.25L20 5.25C20.4142 5.25 20.75 5.58579 20.75 6C20.75 6.41421 20.4142 6.75 20 6.75L4 6.75C3.58579 6.75 3.25 6.41422 3.25 6ZM3.25 18C3.25 17.5858 3.58579 17.25 4 17.25L20 17.25C20.4142 17.25 20.75 17.5858 20.75 18C20.75 18.4142 20.4142 18.75 20 18.75L4 18.75C3.58579 18.75 3.25 18.4142 3.25 18ZM4 11.25C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75L12 12.75C12.4142 12.75 12.75 12.4142 12.75 12C12.75 11.5858 12.4142 11.25 12 11.25L4 11.25Z"
                        fill=""/>
                </svg>

                <!-- cross icon -->
                <svg
                    :class="sidebarToggle ? 'block lg:hidden' : 'hidden'"
                    class="fill-current"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M6.21967 7.28131C5.92678 6.98841 5.92678 6.51354 6.21967 6.22065C6.51256 5.92775 6.98744 5.92775 7.28033 6.22065L11.999 10.9393L16.7176 6.22078C17.0105 5.92789 17.4854 5.92788 17.7782 6.22078C18.0711 6.51367 18.0711 6.98855 17.7782 7.28144L13.0597 12L17.7782 16.7186C18.0711 17.0115 18.0711 17.4863 17.7782 17.7792C17.4854 18.0721 17.0105 18.0721 16.7176 17.7792L11.999 13.0607L7.28033 17.7794C6.98744 18.0722 6.51256 18.0722 6.21967 17.7794C5.92678 17.4865 5.92678 17.0116 6.21967 16.7187L10.9384 12L6.21967 7.28131Z"
                        fill=""/>
                </svg>
            </button>
            <!-- Hamburger Toggle BTN -->

            <a href="index.html" class="lg:hidden">
                <img class="dark:hidden" src="./images/logo/logo.svg" alt="Logo"/>
                <img class="hidden dark:block" src="./images/logo/logo-dark.svg" alt="Logo"/>
            </a>
            <div class="lg:hidden">
                <!-- User Area -->
                <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button1" aria-expanded="false" data-dropdown-toggle="user-dropdown1" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->foto_url ? asset('storage/' . Auth::user()->foto_url) : asset('build/AdminLTE-4.0.0-beta3/src/assets/img/default-150x150.png') }}" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm" id="user-dropdown1">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 mb-2">{{ Auth::user()->nama }}</span>
                        <span class="block text-sm text-gray-900">{{ Auth::user()->pengurus->jabatan->jabatan }}</span>
                        <span class="block text-sm text-gray-900">{{ Auth::user()->pengurus->jabatan->divisi->divisi }}</span>
                        <span class="block text-sm  text-gray-500 truncate">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Home</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div
            class="shadow-theme-md hidden sm:block w-full items-center justify-between gap-4 px-5 py-4 lg:flex lg:justify-end lg:px-0 lg:shadow-none">

            <!-- User Area -->
            <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->foto_url ? asset('storage/' . Auth::user()->foto_url) : asset('build/AdminLTE-4.0.0-beta3/src/assets/img/default-150x150.png') }}" alt="user photo">
            </button>
              <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm" id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 mb-2">{{ Auth::user()->nama }}</span>
                    <span class="block text-sm text-gray-900">{{ Auth::user()->pengurus->jabatan->jabatan }}</span>
                    <span class="block text-sm text-gray-900">{{ Auth::user()->pengurus->jabatan->divisi->divisi }}</span>
                    <span class="block text-sm  text-gray-500 truncate">{{ Auth::user()->email }}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Home</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</button>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- User Area -->
        </div>
    </div>
</header>