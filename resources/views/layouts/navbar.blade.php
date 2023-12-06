<nav class="bg-white dark:bg-gray-900   w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo/logo-navbar.png') }}" class="h-8" alt="Flowbite Logo">
        </a>
        <div class="flex mt-3 md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <button>
            <div class="w-8 h-8 relative flex-col justify-start items-start inline-flex">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#9C9C9C] absolute top-0 left-0">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
              </svg>
              
                <div class="w-3 h-3 items-center flex justify-center bg-red-700 rounded-full  absolute right-2">
                    <span
                        class="text-yellow-50 text-[8px] font-normal font-['Red Hat Display'] tracking-wide">3</span>
                </div>

            </div>
        </button>
            <button>
                <div class="w-8 h-8  md:ms-5 ms-1 relative flex-col justify-start items-start inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 absolute top-0 left-0 text-[#9C9C9C]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                    <div class="w-3 h-3 items-center flex justify-center bg-amber-400 rounded-full  absolute right-2">
                        <span
                            class="text-yellow-50 text-[8px] font-normal font-['Red Hat Display'] tracking-wide">3</span>
                    </div>

                </div>
            </button>
            
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-slate-500 md:text-lg text-xl font-semibold font-['Red Hat Display'] tracking-wide"
                        aria-current="page">Home</a>

                </li>
                <li>
                    <a href="{{ route('event.index') }}"
                        class="block py-2 px-3 md:text-lg text-xl font-semibold font-['Red Hat Display'] tracking-wide 
           {{ request()->routeIs('event.index') ? 'text-red-700' : 'text-slate-500' }}"
                        aria-current="page">Event</a>
                </li>


                <li>
                    <a href="#"
                        class="block py-2 px-3 text-slate-500 md:text-lg text-xl font-semibold font-['Red Hat Display'] tracking-wide"
                        aria-current="page">E-Learning</a>

                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-slate-500 md:text-lg text-xl font-semibold font-['Red Hat Display'] tracking-wide"
                        aria-current="page">Konsultasi</a>

                </li>


            </ul>
        </div>
    </div>
</nav>
