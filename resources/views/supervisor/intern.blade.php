<x-supervisor-layout>
    <div class="grid grid-cols-1 md:grid-cols-3 overflow-auto gap-3">
        <div class="col w-100 col-span-2 ">

            <div class="bg-primary text-center text-white uppercase p-4 font-extrabold rounded-t-lg">
                <h1>Student progess</h1>
            </div>
            <div class="bg-white p-5 dark:bg-gray-600">
                @if ($stat == 0)
                    <div
                        class="relative  py-12 overflow-hidden bg-red-300 text-black text-center dark:bg-red-600 dark:text-white shadow-lg rounded-2xl md:px-9 md:mr-9 md:mt-2 md:mb-2">
                        Thi intern hasn't start the training yet
                    </div>
                    <div class="mx-auto mt-4">
                        <a href="{{ route('training.create', ['id' => $application->id]) }}"
                            class=" font-bold p-4 mx-auto  rounded text-xs bg-accent text-white  hover:bg-gray-500">Start
                            the training</a>
                    </div>
                @else
                <div class="mx-auto mt-4 mb-6">

                    <a href="{{ route('evaluation.index', ['id' => $student_training->id]) }}"
                        class=" font-bold p-4 mx-auto  rounded text-xs bg-accent text-white  hover:bg-gray-500">Evaluate the student</a>
                </div>
                <table class="text-left w-full ">

                    <thead class=" bg-primary text-white">
                        <tr>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Day</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Departement</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Date</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Work done</th>
                        </tr>
                    </thead>
                    <tbody style="height: 50px; overflow: auto">

                        @foreach ($trainingdays as $trainingday)
                            @if ($trainingday->training_id == $student_training->id)
                                @if ($loop->index % 2 == 0)
                                    <tr class="bg-gray-300">
                                        <td class="py-4 px-6  border-grey-light">
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td class="py-4 px-6  border-grey-light">
                                            {{ $trainingday->departement }}
                                        </td>
                                        <td class="py-4 px-6  border-grey-light">

                                            {{ $trainingday->date }}
                                        </td>
                                        <td class="py-4 px-6  border-grey-light">
                                            {{ $trainingday->work_done }}
                                        </td>
                                    </tr>
                                @else
                                    <tr class=" bg-slate-400 text-white">
                                        <td class="py-4 px-6  border-grey-light">
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td class="py-4 px-6  border-grey-light ">
                                            {{ $trainingday->departement }}
                                        </td>
                                        <td class="py-4 px-6  border-grey-light">
                                            {{ $trainingday->date }}
                                        </td>
                                        <td class="py-4 px-6  border-grey-light">
                                            {{ $trainingday->work_done }}
                                        </td>
                                    </tr>
                                @endif
                            @else
                            @endif
                        @endforeach
                    </tbody>
                </table>

                @endif
            </div>


        </div>
        <div>
            <div>
                <div class="bg-primary text-center text-white uppercase p-4 font-extrabold rounded-t-lg">
                    <h1>Student information</h1>
                </div>
                <div class="bg-white p-5 dark:bg-gray-600">
                    <div class="grid grid-cols-2 gap-8 md:grid-cols-2 justify-between">
                        <div class=" font-sans text-base antialiased font-light leading-relaxed dark:text-neutral-50">
                            <div class="grid grid-cols-2 ">
                                <div class="col text-left font-light text-gray-600 dark:text-neutral-50">StudentNo</div>
                                <div class="col text-justify uppercase dark:text-neutral-50">
                                    {{ $current_student->studentid }}</div>
                            </div>

                            @foreach ($users as $user)
                                @if ($current_student->uid == $user->id)
                                    <div class="grid grid-cols-2 ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Name
                                        </div>
                                        <div class="col text-justify uppercase dark:text-neutral-50">
                                            {{ $user->name }}</div>
                                    </div>
                                    <div class="grid grid-cols-2 ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Surname
                                        </div>
                                        <div class="col text-justify uppercase dark:text-neutral-50">
                                            {{ $current_student->surname }}
                                        </div>
                                    </div>



                                    <div class="grid grid-cols-2 ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Adress
                                        </div>
                                        <div class="col text-justify uppercase dark:text-neutral-50">
                                            {{ $current_student->address }}</div>
                                    </div>
                                    <div class="grid grid-cols-2 ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Phone
                                        </div>
                                        <div class="col text-justify uppercase dark:text-neutral-50">
                                            {{ $current_student->phonenumber }}</div>
                                    </div>
                                    <div class="grid grid-cols-2 ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Email
                                        </div>
                                        <div class="col text-justify  dark:text-neutral-50">
                                            {{ $user->email }}</div>
                                    </div>
                                @endif
                            @endforeach




                        </div>
                        <img class="rounded border-accent border-2 shadow-lg"
                            src="/uploads/profil/{{ $current_student->photo }} " alt="photo"
                            srcset="/uploads/profil/{{ $current_student->photo }}" width="150px" height="150px"
                            style="image-resolution:inherit; ">
                    </div>

                </div>
            </div>
            <div>
                <div class="bg-primary text-center text-white uppercase p-4 font-extrabold ">
                    <h1>Training information</h1>
                </div>
                <div class="bg-white p-5 dark:bg-gray-600">
                    @if ($stat != 0)


                        <div class=" font-sans text-base antialiased font-light leading-relaxed dark:text-neutral-50">
                            <div class="grid grid-cols-2 ">
                                <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Training days
                                </div>
                                <div class="col text-justify uppercase dark:text-neutral-50">
                                    {{$student_training->days }}</div>
                            </div>

                        </div>

                        <div class=" font-sans text-base antialiased font-light leading-relaxed dark:text-neutral-50">
                            <div class="grid grid-cols-2 ">
                                <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Start date
                                </div>
                                <div class="col text-justify uppercase dark:text-neutral-50">
                                    {{explode(" ",$student_training->start_date)[0] }}</div>
                            </div>

                        </div>


                        <div class=" font-sans text-base antialiased font-light leading-relaxed dark:text-neutral-50">
                            <div class="grid grid-cols-2 ">
                                <div class="col text-left font-light text-gray-600 dark:text-neutral-50">End date
                                </div>
                                <div class="col text-justify uppercase dark:text-neutral-50">
                                    {{explode(" ",$student_training->end_date)[0] }}</div>
                            </div>

                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

</x-supervisor-layout>
