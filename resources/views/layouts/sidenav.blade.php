@if (Auth::user()->userType == 'user')
    <aside class=" bg-primary border-r-4 border-accent" style="height: 86rem">

        <div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
            class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

        <div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
            class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-primary lg:translate-x-0 lg:static lg:inset-0 h-screen">
            <div class="flex items-center justify-center px-6 py-4 bg-white ">
                <div class="" style="width: 80px">
                    <a href="{{ route('home') }}">
                        <img src="/images/logo.png" alt="logo">
                    </a>
                </div>
            </div>

            <nav class="mt-6 ">
                <div>


                    <a class=" flex items-center justify-start w-full p-4 pl-6 my-2  transition-colors duration-200 {{ str_contains(Route::currentRouteName(), 'home') ? 'border-l-4 border-white bg-accent' : '' }}  hover:bg-gray-600 hover:border-r-4 hover:border-white text-white dark:text-white "
                        href={{ route('home') }}>

                        <span class="mx-2 text-sm font-normal">
                            Home
                        </span>
                    </a>

                    <a class=" flex items-center justify-start w-full p-4 pl-6 my-2  transition-colors duration-200 {{ str_contains(Route::currentRouteName(), 'application') ? 'border-l-4 border-white bg-accent' : '' }}  hover:bg-gray-600 hover:border-r-4 hover:border-white text-white  dark:text-white "
                        href={{ route('application.index') }}>

                        <span class="mx-2 text-sm font-normal">
                            Application
                        </span>
                    </a>

                    <a class=" flex items-center justify-start w-full p-4 pl-6 my-2  transition-colors duration-200 {{ str_contains(Route::currentRouteName(), 'training') ? 'border-l-4 border-white bg-accent' : '' }}  hover:bg-gray-600 hover:border-r-4 hover:border-white text-white  dark:text-white "
                        href={{ route('training.index') }}>

                        <span class="mx-2 text-sm font-normal">
                            Training
                        </span>
                    </a>





                    <a class=" flex items-center justify-start w-full p-4 pl-6 my-2  transition-colors duration-200 {{ str_contains(Route::currentRouteName(), 'profile') ? 'border-l-4 border-white bg-accent' : '' }}  hover:bg-gray-600 hover:border-r-4 hover:border-white text-white  dark:text-white "
                        href={{ route('profile.edit') }}>

                        <span class="mx-2 text-sm font-normal">
                            Profile
                        </span>
                    </a>

                    <a class=" flex items-center justify-start w-full p-4 pl-6 my-2  transition-colors duration-200 {{ str_contains(Route::currentRouteName(), '#') ? 'border-l-4 border-white bg-accent' : '' }}  hover:bg-gray-600 hover:border-r-4 hover:border-white text-white  dark:text-white "
                        href="#">

                        <span class="mx-2 text-sm font-normal">
                            Services
                        </span>
                    </a>


                </div>
            </nav>
        </div>
    </aside>
@else
    <aside class=" bg-primary border-r-4 border-accent" style="height: 86rem">

        <div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
            class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

        <div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
            class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-primary lg:translate-x-0 lg:static lg:inset-0 h-screen">
            <div class="flex items-center justify-center px-6 py-4 bg-white ">
                <div class="" style="width: 80px">
                    <a href="{{ route('home') }}">
                        <img src="/images/logo.png" alt="logo">
                    </a>
                </div>
            </div>

            <nav class="mt-6 ">
                <div>


                    <a class=" flex items-center justify-start w-full p-4 pl-6 my-2  transition-colors duration-200 {{ str_contains(Route::currentRouteName(), 'home') ? 'border-l-4 border-white bg-accent' : '' }}  hover:bg-gray-600 hover:border-r-4 hover:border-white text-white dark:text-white "
                        href={{ route('home') }}>

                        <span class="mx-2 text-sm font-normal">
                            Home
                        </span>
                    </a>



                    <a class=" flex items-center justify-start w-full p-4 pl-6 my-2  transition-colors duration-200 {{ str_contains(Route::currentRouteName(), 'announcement') ? 'border-l-4 border-white bg-accent' : '' }}  hover:bg-gray-600 hover:border-r-4 hover:border-white text-white  dark:text-white "
                        href={{ route('announcement.create') }}>

                        <span class="mx-2 text-sm font-normal">
                            Announcements
                        </span>
                    </a>


                    <a class=" flex items-center justify-start w-full p-4 pl-6 my-2  transition-colors duration-200 {{ str_contains(Route::currentRouteName(), 'profile') ? 'border-l-4 border-white bg-accent' : '' }}  hover:bg-gray-600 hover:border-r-4 hover:border-white text-white  dark:text-white "
                        href="{{ route('profile.edit') }}">

                        <span class="mx-2 text-sm font-normal">
                            Profile
                        </span>
                    </a>

                </div>
            </nav>
        </div>
    </aside>
@endif
