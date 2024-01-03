<x-visitor-layout>
    @if (Route::has('login'))
        <div class="h-screen lg:flex">
            <div class="ml-auto lg:w-9/12 xl:w-7/12">


                <div class="mb-20 mt-40 px-4 sm:max-w-xl md:max-w-full md:px-24 lg:ml-auto lg:max-w-screen-md lg:px-8">
                    <div class="relative z-20 flex flex-col sm:w-2/3 lg:w-3/5">
                        <span class="w-20 h-2 mb-12 bg-gray-800 dark:bg-white">
                        </span>
                        <h1
                            class="flex flex-col text-6xl font-black leading-none text-gray-800 uppercase font-bebas-neue sm:text-8xl dark:text-white">
                            TMS

                        </h1>
                        <p class="text-sm text-gray-700 sm:text-base dark:text-white">
                            Hi, welcome back hero of your training narrative. Your destiny awaits – let the hero in you
                            shine! </p>

                        <div class="flex mt-8">
                            @auth
                                <a href="{{ url('/home') }}"
                                    class="px-4 py-2 text-primary uppercase bg-transparent border-2 border-primary rounded-lg dark:text-white hover:bg-primary hover:text-white text-md">
                                    Go back Home
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="px-4 py-2 mr-4 text-white uppercase bg-primary border-2 border-transparent rounded-lg text-md hover:bg-primary ">
                                    Login
                                </a>


                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="px-4 py-2 text-primary  uppercase bg-transparent border-2 border-primary rounded-lg dark:text-white hover:bg-primary hover:text-white text-md">
                                        Register
                                    </a>
                                @endif
                            @endauth


                        </div>
                    </div>
                </div>
            </div>
            <div class="relative my-auto hidden h-full bg-green-50 lg:block lg:w-3/12 xl:w-5/12">
                <img class="h-full w-full object-cover" src="images/background.jpg" alt="" />
            </div>
        </div>
    @else
        <div class="h-screen lg:flex">
            <div class="ml-auto lg:w-9/12 xl:w-7/12">


                <div class="mb-20 mt-40 px-4 sm:max-w-xl md:max-w-full md:px-24 lg:ml-auto lg:max-w-screen-md lg:px-8">
                    <div class="relative z-20 flex flex-col sm:w-2/3 lg:w-3/5">
                        <span class="w-20 h-2 mb-12 bg-gray-800 dark:bg-white">
                        </span>
                        <h1
                            class="flex flex-col text-6xl font-black leading-none text-gray-800 uppercase font-bebas-neue sm:text-8xl dark:text-white">
                            TMS

                        </h1>
                        <p class="text-sm text-gray-700 sm:text-base dark:text-white">
                            Embrace the extraordinary! Our Training Management System is the catalyst for your hero's
                            journey in the world of learning. Unleash your potential, conquer challenges, and emerge as
                            the
                            hero of your training narrative. Your destiny awaits – let the hero in you shine! </p>

                        <div class="flex mt-8">

                            <a href="{{ route('login') }}"
                                class="px-4 py-2 mr-4 text-white uppercase bg-primary border-2 border-transparent rounded-lg text-md hover:bg-primary ">
                                Login
                            </a>



                            <a href="{{ route('register') }}"
                                class="px-4 py-2 text-primary  uppercase bg-transparent border-2 border-primary rounded-lg dark:text-white hover:bg-primary hover:text-white text-md">
                                Register
                            </a>




                        </div>
                    </div>
                </div>
            </div>
            <div class="relative my-auto hidden h-full bg-green-50 lg:block lg:w-3/12 xl:w-5/12">
                <img class="h-full w-full object-cover" src="images/background.jpg" alt="" />
            </div>
        </div>
    @endif
</x-visitor-layout>
