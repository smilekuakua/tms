<x-app-layout>


    @if ($times == 0)

        <div
            class="relative  py-12 overflow-hidden bg-red-300 text-black text-center dark:bg-red-600 dark:text-white shadow-lg rounded-2xl md:px-9 md:mr-9 md:mt-2 md:mb-2">
            No applications have been submitted yet.
        </div>

        <div
            class="relative mt-12  py-12 overflow-hidden text-black text-center dark:bg-red-600 dark:text-white rounded-2xl md:px-9 md:mr-9 md:mt-12 md:mb-2">
            To begin filling out your logbook, you must have already submitted your application. <a
                href={{ route('application.index') }} class="text-primary"><span>Apply now</span></a>
        </div>

    @else
        @if ($current_training != null)
            @foreach ($applications as $application)
                @if ($current_training->appid == $application->id)
                    <div class="grid grid-cols-1 md:grid-cols-3 overflow-auto ">
                        <div class="col-span-2">
                            <div
                                class="relative mt-4  p-6 bg-white dark:bg-gray-600 shadow-lg rounded-2xl md:px-9 md:mr-9 md:mt-2 md:mb-2">
                                <form action='{{ route('trainingdays.save') }}' method="POST" role="form text-left">
                                    @csrf
                                    <!-- Input fields for application data, e.g., company_name, working_field, etc. -->
                                    <!-- Example: -->
                                    <x-text-input id="training_id" type="hidden" name="training_id"
                                        value="{{ $application->id }}" required />
                                    <div class="grid grid-cols-2 gap-4 ">

                                        <div class="mb-3">

                                            <x-text-input id="departement" placeholder="Departement"
                                                class=" mt-1 w-full" type="text" name="departement" required />
                                            <x-input-error :messages="$errors->get('Departement')" class="mt-2" />

                                        </div>
                                        <div class="mb-3">

                                            <x-text-input id="date" placeholder="date" class=" mt-1 w-full"
                                                type="date" name="date" required />
                                            <x-input-error :messages="$errors->get('date')" class="mt-2" />

                                        </div>
                                    </div>


                                    <div class="mb-3">

                                        <x-text-area id="work_done" class=" mt-1 w-full" type="text" name="work_done"
                                            placeholder="Description of the work done" required />
                                        <x-input-error :messages="$errors->get('work_done')" class="mt-2" />

                                    </div>


                                    <x-primary-button class="">
                                        {{ __('Add a new day') }}
                                    </x-primary-button>

                                </form>
                            </div>

                            <div
                                class="relative mt-4  p-6 bg-white dark:bg-gray-600 shadow-lg rounded-2xl md:px-9 md:mr-9 md:mt-2 md:mb-2">
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
                                            @if ($trainingday->training_id == $current_training->id)
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
                            </div>

                        </div>
                        <div>
                            <div class=" ml-4">
                                <div class=" rounded-2xl">

                                    <div class="bg-white text-center  dark:bg-gray-600" style="">

                                        <div class="uppercase mb-6 bg-accent dark:text-neutral-50"> Training information.
                                        </div>


                                        <div class="ml-12 mt-8">
                                            <div class="mb-4 dark:text-neutral-50"> Student information </div>

                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Name</div>
                                                    <div class="col text-justify uppercase dark:text-neutral-50">{{ $user->name }}</div>
                                                </div>
                                            </div>

                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Surname</div>
                                                    <div class="col text-justify uppercase dark:text-neutral-50">{{ $student->surname }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Email</div>
                                                    <div class="col text-justify dark:text-neutral-50 ">{{ $user->email }}</div>
                                                </div>
                                            </div>
                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Telephone</div>
                                                    <div class="col text-justify dark:text-neutral-50 ">{{ $student->phonenumber }}</div>
                                                </div>
                                            </div>

                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50 ">Adress</div>
                                                    <div class="col text-justify dark:text-neutral-50 ">{{ $student->address }}</div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="ml-12 mt-12">
                                            <div class="mb-4 dark:text-neutral-50"> Application information </div>
                                            <div class="mb-2 font-light text-gray-600 dark:text-neutral-50"> Company information </div>
                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Company name
                                                    </div>
                                                    <div class="col text-justify uppercase dark:text-neutral-50">
                                                        {{ $application->company_name }}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Working field
                                                    </div>
                                                    <div class="col text-justify uppercase dark:text-neutral-50">
                                                        {{ $application->working_field }}</div>
                                                </div>
                                            </div>

                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Company address
                                                    </div>
                                                    <div class="col text-justify uppercase dark:text-neutral-50">
                                                        {{ $application->company_address }}</div>
                                                </div>
                                            </div>

                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Company email
                                                    </div>
                                                    <div class="col text-justify dark:text-neutral-50">{{ $application->company_email }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Company fax
                                                    </div>
                                                    <div class="col text-justify uppercase dark:text-neutral-50">
                                                        {{ $application->company_fax }}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Company
                                                        telephone
                                                    </div>
                                                    <div class="col text-justify uppercase dark:text-neutral-50">
                                                        {{ $application->company_phone }}</div>
                                                </div>
                                            </div>
                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Company web
                                                        address
                                                    </div>
                                                    <div class="col text-justify dark:text-neutral-50">
                                                        {{ $application->company_web_address }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card   m-4  rounded-2xl dark:text-neutral-50">

                                            <div class=" card-header  bg-slate-500 text-center uppercase text-white dark:text-neutral-50">
                                                Company description
                                            </div>


                                            <div class=" card-body m-4 text-start dark:text-neutral-50">
                                                {{ $application->company_description }}
                                            </div>

                                        </div>
                                        <div class="ml-12 mt-12 ">
                                            <div class="mb-2 mt-2 font-light text-gray-600 dark:text-neutral-50"> Supervisor information
                                            </div>
                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Name</div>
                                                    <div class="col text-justify uppercase dark:text-neutral-50">
                                                        {{ $application->supervisor_name }}</div>
                                                </div>
                                            </div>
                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Surname</div>
                                                    <div class="col text-justify uppercase dark:text-neutral-50">
                                                        {{ $application->supervisor_surname }}</div>
                                                </div>
                                            </div>
                                            <div class="font-extralight">
                                                <div class="grid grid-cols-2 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50 ">Email</div>
                                                    <div class="col text-justify dark:text-neutral-50 ">
                                                        {{ $application->supervisor_email }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="font-extralight ">
                                                <div class="grid grid-cols-2 dark:text-neutral-50 ">
                                                    <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Position</div>
                                                    <div class="col text-justify uppercase mb-12 dark:text-neutral-50">
                                                        {{ $application->supervisor_position }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endif
            @endforeach
        @else
            <div class="grid grid-cols-1 md:grid-cols-3 overflow-auto ">
                <div class="col-span-2">
                    <table class="text-left w-full ">

                        <thead class=" bg-primary text-white">
                            <tr>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Company</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Date</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($applications as $application)
                                @if ($application->user_id == Auth::id())
                                    <tr class="hover:bg-gray-300">
                                        <td class="py-4 px-6 border-b border-grey-light dark:text-neutral-50 ">
                                            {{ $application->company_name }}
                                        </td>
                                        <td class="py-4 px-6 border-b border-grey-light dark:text-neutral-50 ">
                                            {{ $application->created_at }}
                                        </td>
                                        <td class="py-4 px-6 border-b border-grey-light">


                                            <a href="{{ route('training.create', ['id' => $application->id]) }}"
                                                class=" font-bold p-4  rounded text-xs bg-accent text-white  hover:bg-gray-500">Start
                                                the training</a>

                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                    </table>


                </div>
                <div class=" ml-4">
                    <div class=" rounded-2xl">

                        <div class="bg-white text-center  p-4  dark:bg-gray-600 dark:text-neutral-50" style="height: 300px">

                            <div class="uppercase mb-6 dark:text-neutral-50"> make sure your information are correct. </div>

                            <div class="ml-12 mt-12 dark:text-neutral-50">
                                <div class="font-extralight">
                                    <div class="grid grid-cols-2 ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50 ">Name</div>
                                        <div class="col text-justify uppercase">{{ $user->name }}</div>
                                    </div>
                                </div>

                                <div class="font-extralight">
                                    <div class="grid grid-cols-2 ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Surname</div>
                                        <div class="col text-justify uppercase dark:text-neutral-50">{{ $student->surname }}
                                        </div>
                                    </div>
                                </div>
                                <div class="font-extralight">
                                    <div class="grid grid-cols-2 ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Email</div>
                                        <div class="col text-justify dark:text-neutral-50">{{ $user->email }}</div>
                                    </div>
                                </div>
                                <div class="font-extralight">
                                    <div class="grid grid-cols-2 ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50 ">Telephone
                                        </div>
                                        <div class="col text-justify  dark:text-neutral-50">{{ $student->phonenumber }}</div>
                                    </div>
                                </div>

                                <div class="font-extralight">
                                    <div class="grid grid-cols-2 ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50 ">Adress</div>
                                        <div class="col text-justify dark:text-neutral-50">{{ $student->address }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-primary text-center text-white uppercase  font-extrabold p-4 rounded-b-2xl dark:bg-accent">
                            <h1>

                            </h1>
                        </div>
                    </div>
                </div>

            </div>
        @endif



    @endif






</x-app-layout>
