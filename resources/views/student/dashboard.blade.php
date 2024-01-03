<x-student-layout>

    <!-- Grid wrapper -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Columns -->
        <div class="col w-100 col-span-2 mb-2">

            <div class="py-12">
                <div
                    class="relative mt-4  p-6 bg-white border-t-4 border-accent dark:border-primary dark:bg-gray-600 shadow-lg sm:rounded-lg sm:md:px-9 sm:mr-9 sm:mt-12 sm::mb-2 dark:text-neutral-50">
                    <div class="grid grid-cols-1 md:grid-cols-3">
                        <div> </div>
                        <div class="relative">
                            <div
                                class="w-48 h-48 mx-auto  absolute inset-x-0 top-0 -mt-32 flex items-center justify-center ">
                                <a href="#" class="relative block">
                                    <img alt="profil" src="uploads/profil/{{ $current_student->photo }} "
                                        class="mx-auto object-cover sm:rounded-full w-48 h-48 border-4 border-accent dark:border-primary" />
                                </a>
                            </div>
                        </div>

                        <div> <a href={{ route('profile.edit') }}
                                class="items-center px-4 py-2 bg-accent dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Edit profil</a>

                        </div>


                    </div>
                    <div class="mt-20 text-center">
                        <h1 class="text-4xl font-medium text-gray-700 uppercase dark:text-neutral-50">
                            {{ $user->name }}
                            {{ $current_student->surname }}</h1>
                        <p class="font-light text-gray-600 mt-3 dark:text-neutral-50">{{ $current_student->address }}
                        </p>
                        <p class="mt-6 text-gray-500 dark:text-neutral-50"> &nbsp; {{ $current_student->phonenumber }}
                        </p>
                        <p class="mt-2 text-gray-500 dark:text-neutral-50">{{ $user->email }}</p>

                    </div>
                    <div
                        class="container grid grid-cols-2 gap-8  mx-auto text-center md:grid-cols-4 bg-primary p-4 md:mr-9 md:mt-12 ">
                        <div>
                            <h5 class="text-5xl font-bold text-white">
                                <span class="inline text-white">
                                    {{ $times }}
                                </span>

                                <a href={{ route('application.index') }}>
                                    <span class="text-indigo-200">
                                        +
                                    </span>
                                </a>

                            </h5>
                            <p class="text-xs font-medium tracking-wide text-indigo-100 uppercase">
                                Applications
                            </p>
                        </div>
                        <div>
                            <h5 class="text-5xl font-bold text-white">
                                <span class="inline text-white">
                                    <span class="inline text-white">
                                        {{ $days }}
                                    </span>
                                </span>
                                <a href={{ route('training.index') }}>
                                    <span class="text-indigo-200">
                                        +
                                    </span>
                                </a>
                            </h5>
                            <p class="text-xs font-medium tracking-wide text-indigo-100 uppercase">
                                Training days
                            </p>
                        </div>
                        <div>
                            <h5 class="text-5xl font-bold text-white">
                                <span class="inline text-white">
                                    13
                                </span>
                                <span class="text-indigo-200">
                                    +
                                </span>
                            </h5>
                            <p class="text-xs font-medium tracking-wide text-indigo-100 uppercase">
                                Documents
                            </p>
                        </div>

                        <div>
                            <h5 class="text-5xl font-bold text-white">
                                <span class="inline text-white">
                                    3
                                </span>
                                <span class="text-indigo-200">
                                    +
                                </span>
                            </h5>
                            <p class="text-xs font-medium tracking-wide text-indigo-100 uppercase">
                                Posts
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="col w-100 ">
            <div class="w-100 mt-24">
                <x-calendar />
            </div>




        </div>



    </div>
    <!-- Grid wrapper -->
    <!-- component -->
    <div class="flex flex-col m-auto p-auto">
        <h1 class="flex p-2 font-bold text-4xl text-gray-800  dark:text-neutral-50">
            Announcements
        </h1>
        <div class="flex overflow-x-scroll pb-2 hide-scroll-bar">
            <div class="flex flex-nowrap  ">



                @foreach ($announcements as $announce)
                    <div class="inline-block px-3">
                        <div
                            class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <div class="w-3/3 p-4">
                                <h1 class="text-2xl font-bold text-gray-900">
                                    {{ $announce->title }}
                                </h1>
                                <p class="mt-2 text-sm text-gray-600">
                                    {{ $announce->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>


</x-student-layout>
