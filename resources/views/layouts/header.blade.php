<header>
    <nav class="bg-green-800 border-b-4 border-amber-400 px-4 lg:px-6 z-50 py-2.5 ">
        <div class="flex flex-wrap items-center justify-between mx-auto max-w-screen-xl">
            <!-- Left Section: Logo -->
            <!-- Sidebar Button -->
            <a href="#" class="flex items-center">
                <img src="{{ asset('assets/images/tesda.png') }}" class="h-10 sm:h-12 mr-3 filter invert brightness-0"
                    alt="TESDA Logo" />
                <span class="text-xl font-semibold whitespace-nowrap text-white">SMTS</span>
            </a>

            <!-- Right Section: Navigation Links + Logout -->
            <div class="flex items-center content-center
             lg:space-x-8 lg:order-2">
                <!-- Profile and User Type Links -->


                <a href="{{ route('profile', ['id' => Auth::user()->id]) }}"
                    class="block py-2 text-gray-50 lg:hover:bg-transparent lg:hover:text-amber-400 hover:bg-amber-700 dark:hover:text-white">
                    {{ Auth::user()->first_name }} ({{ Auth::user()->type }})
                </a>


                <!-- Logout Button -->
                <a href="{{ route('logout') }}"
                    class="flex items-center py-2 text-gray-50 lg:hover:bg-transparent lg:hover:text-amber-400 hover:bg-amber-700 dark:hover:text-white"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Log Out
                </a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                    @csrf
                </form>

                <!-- Mobile Menu Toggle Button -->
                <button type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    data-collapse-toggle="mobile-menu">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="hidden w-full lg:hidden" id="mobile-menu">
                <ul class="flex flex-col mt-4 space-y-2 font-medium">
                    <li>
                        <a href="{{ route('profile', ['id' => Auth::user()->id]) }}"
                            class="block py-2 pr-4 pl-3 text-gray-50 hover:bg-amber-700 dark:hover:text-white">
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            {{ Auth::user()->first_name }} ({{ Auth::user()->type }})
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
