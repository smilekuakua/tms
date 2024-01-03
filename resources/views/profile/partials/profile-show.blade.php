@if (auth()->user()->userType == 'user')
    @foreach (App\Models\Student::all() as $student)
        @if ($student->uid == Auth::user()->id)
            <div class=" relative">
                <div
                    class=" bg-white dark:bg-gray-600 shadow-lg dark:text-white   inset-x-0  top-0 -mt-16  mx-auto absolute flex items-center justify-center sm:rounded-full w-20 h-20 border-4 border-accent dark:border-primary ">
                    <p class="uppercase  mx-auto">
                        <span
                            class="text-4xl font-medium text-primary uppercase dark:text-neutral-50">{{ Auth::user()->name[0] }}</span>
                        <span
                            class="text-4xl font-medium text-accent uppercase dark:text-neutral-50">{{ $student->surname[0] }}</span>
                    </p>
                </div>
            </div>
            <div class="container grid  md:grid-cols-2  ">


                <div class="  mx-auto mt-6 ">
                    <p class="uppercase ">
                    <div class="text-left font-light text-gray-600 dark:text-neutral-50 mb-3">Profile Information</div>
                    <div class="font-extralight">
                        <div class="grid grid-cols-3 ">
                            <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Student number
                            </div>
                            <div class="col text-justify uppercase dark:text-neutral-50">{{ $student->studentid }}</div>
                        </div>
                    </div>
                    <div class="font-extralight">
                        <div class="grid grid-cols-3 ">
                            <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Name</div>
                            <div class="col text-justify uppercase dark:text-neutral-50">{{ Auth::user()->name }}</div>
                        </div>
                    </div>
                    <div class="font-extralight">
                        <div class="grid grid-cols-3 ">
                            <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Surname</div>
                            <div class="col text-justify uppercase dark:text-neutral-50">{{ $student->surname }}</div>
                        </div>
                    </div>
                    <div class="font-extralight">
                        <div class="grid grid-cols-3 ">
                            <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Address</div>
                            <div class="col text-justify uppercase dark:text-neutral-50">{{ $student->address }}</div>
                        </div>
                    </div>
                    <div class="font-extralight">
                        <div class="grid grid-cols-3 ">
                            <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Telephone</div>
                            <div class="col text-justify uppercase dark:text-neutral-50">{{ $student->phonenumber }}
                            </div>
                        </div>
                    </div>
                    <div class="font-extralight">
                        <div class="grid grid-cols-3 ">
                            <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Email</div>
                            <div class="col text-justify  dark:text-neutral-50">{{ Auth::user()->email }}</div>
                        </div>
                    </div>

                    <div class="font-extralight">
                        <div class="grid grid-cols-3 ">
                            <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Created</div>
                            <div class="col text-justify  dark:text-neutral-50">{{ $timeAgo }}</div>
                        </div>
                    </div>
                    </p>
                </div>
                <div class="  mx-auto mt-6 ">
                    <a href="#" class="relative block">
                        <img alt="profil" src="uploads/profil/{{ $student->photo }} "
                            class="mx-auto object-cover sm:rounded-sm w-48 h-48 border-4 border-accent dark:border-primary" />
                    </a>
                </div>

            </div>
        @endif
    @endforeach
@else
    @foreach (App\Models\Worker::all() as $worker)
        @if ($worker->uid == Auth::user()->id)
            <div class=" relative">
                <div
                    class=" bg-white dark:bg-gray-600 shadow-lg dark:text-white   inset-x-0  top-0 -mt-16  mx-auto absolute flex items-center justify-center sm:rounded-full w-20 h-20 border-4 border-accent dark:border-primary ">
                    <p class="uppercase  mx-auto">
                        <span
                            class="text-4xl font-medium text-primary uppercase dark:text-neutral-50">{{ Auth::user()->name[0] }}</span>
                        <span
                            class="text-4xl font-medium text-accent uppercase dark:text-neutral-50">{{ $worker->surname[0] }}</span>
                    </p>
                </div>
            </div>
            <div class="container grid md:grid-cols-2  ">


                <div class="  mx-auto mt-6 ">
                    <p class="uppercase ">
                    <div class="text-left font-light text-gray-600 dark:text-neutral-50 mb-3">Profile Information</div>


                    <div class="font-extralight">
                        <div class="grid grid-cols-3 ">
                            <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Name</div>
                            <div class="col text-justify uppercase dark:text-neutral-50">{{ Auth::user()->name }}</div>
                        </div>
                    </div>

                    <div class="font-extralight">
                        <div class="grid grid-cols-3 ">
                            <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Surname</div>
                            <div class="col text-justify uppercase dark:text-neutral-50">{{ $worker->surname }}</div>
                        </div>
                    </div>
                    <div class="font-extralight">
                        <div class="grid grid-cols-3 ">
                            <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Email</div>
                            <div class="col text-justify  dark:text-neutral-50">{{ Auth::user()->email }}</div>
                        </div>
                    </div>
                    <div class="font-extralight">
                        <div class="grid grid-cols-3 ">
                            <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Created</div>
                            <div class="col text-justify  dark:text-neutral-50">{{ $timeAgo }}</div>
                        </div>
                    </div>
                    </p>
                </div>
                <div class="  mx-auto mt-6 ">
                    <p class="uppercase ">
                    <div class="text-left font-light text-gray-600 dark:text-neutral-50 mb-3">Company Information</div>

                    <div class="font-extralight">
                        <div class="grid grid-cols-3 ">
                            <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Company</div>
                            <div class="col text-justify uppercase dark:text-neutral-50">{{ $worker->company }}</div>
                        </div>
                    </div>
                    <div class="font-extralight">
                        <div class="grid grid-cols-3 ">
                            <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Postion</div>
                            <div class="col text-justify capitalize  dark:text-neutral-50">{{ $worker->position }}
                            </div>
                        </div>
                    </div>
                    </p>
                </div>

            </div>
        @endif
    @endforeach
@endif
