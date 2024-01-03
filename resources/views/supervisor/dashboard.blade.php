<x-supervisor-layout>


    <p class="text-primary p-6 text-3xl font-medium w-full px-6 dark:text-accent">Dashboard</h3>


    <div class="w-full px-6 mb-4">
        <div
            class="flex items-center px-5 py-6  rounded-md  bg-clip-border  bg-white   dark:bg-gray-600 shadow-lg dark:text-white ">
            <div class="p-3 rounded-full bg-opacity-75">
                <svg class="h-8 w-8 text-gray-600 dark:text-white " viewBox="0 0 28 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                        fill="currentColor" />
                    <path
                        d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                        fill="currentColor" />
                    <path
                        d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                        fill="currentColor" />
                    <path
                        d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                        fill="currentColor" />
                    <path
                        d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                        fill="currentColor" />
                    <path
                        d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                        fill="currentColor" />
                </svg>
            </div>

            <div class="mx-5">
                <h4 class="text-2xl font-semibold text-gray-700  dark:text-white">{{ strtoupper($user->name) }} &nbsp;
                    {{ strtoupper($current_worker->surname) }}</h4>
                <div class="text-gray-500  dark:text-white">
                    {{ $current_worker->position }}/{{ $current_worker->company }} </div>
            </div>
        </div>
    </div>
    <div class="w-full px-6 ">
        <div class="flex items-center   rounded-md">
            <div class="card first-letter:uppercase">
                <p class="text-primary p-4 text-2xl font-medium dark:text-accent"> Interns</p>
                <div class="flex overflow-x-scroll pb-2 hide-scroll-bar">
                    <div class="flex flex-nowrap  ">
                        @foreach ($applications as $application)
                            @if (strtoupper($application->supervisor_surname) == strtoupper($current_worker->surname) &&
                                    strtoupper($application->supervisor_name) == strtoupper($user->name))
                                <div class="relative flex flex-col text-gray-700 dark:bg-gray-600  dark:text-white bg-clip-border rounded-xl bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out "
                                    style="height: max-content; width:380px">

                                    @foreach ($students as $student)
                                        @if ($student->uid == $application->user_id)
                                            <div class="pl-5 pt-5">
                                                <h4
                                                    class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">

                                                    <p class="uppercase">
                                                        @foreach ($users as $user)
                                                            @if ($user->id == $application->user_id)
                                                                {{ $user->name }}
                                                            @endif
                                                        @endforeach

                                                        {{ $student->surname }}
                                                    </p>
                                                </h4>
                                                <div class="grid grid-cols-2 gap-8 md:grid-cols-2 justify-between">
                                                    <p
                                                        class=" font-sans text-base antialiased font-light leading-relaxed text-inherit">

                                                        StudentNo: {{ $student->studentid }} <br>
                                                        Adress: {{ $student->address }}<br>
                                                        Phone: {{ $student->phonenumber }}

                                                    </p>
                                                    <img class="rounded border-accent border-2 shadow-lg"
                                                        src="/uploads/profil/{{ $student->photo }} " alt="photo"
                                                        srcset="/uploads/profil/{{ $student->photo }}" width="150px"
                                                        height="150px" style="image-resolution:inherit; ">
                                                </div>
                                            </div>

                                            <div class="p-6 pt-0">
                                                <a
                                                    href={{ route('application.intern', ['id' => $student->id]) }}
                                                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                                    type="button">
                                                    Read More
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            @else
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-supervisor-layout>
