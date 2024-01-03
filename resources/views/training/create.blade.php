<x-app-layout>

    <div class="grid grid-cols-1 md:grid-cols-3 overflow-auto ">
        <div class="col-span-2  p-6 bg-white dark:bg-gray-600 shadow-lg rounded-2xl md:px-9 md:mr-9 md:mt-2 md:mb-2">


            <form method="post" action="{{ route('training.store') }}">
                @csrf

                <div class="mb-4 dark:text-neutral-50"> Select your starting and end date in orther to fill your logbook
                </div>
                <x-text-input id="application" type="hidden" name="end_date" name="application"
                    value="{{ $application->id }}" required />
                <div class="mb-3" class="dark:text-neutral-50">
                    <label for="your_date_input" class="dark:text-neutral-50">Start Date:</label>
                    <x-text-input id="start_date" class=" mt-1 w-full dark:text-neutral-50" type="date"
                        name="start_date" required />
                    <x-input-error :messages="$errors->get('start_date')" class="mt-2" />

                </div>

                <div class="mb-3">
                    <label for="end_date" class="dark:text-neutral-50">End Date:</label>
                    <x-text-input id="end_date" class=" mt-1 w-full" type="date" name="end_date" required />
                    <x-input-error :messages="$errors->get('end_date')" class="mt-2" />

                </div>

                <button type="submit"
                    class="btn bg-accent text-white p-4 hover:bg-gray-600  dark:hover:bg-gray-800  dark:bg-primary"
                    style="width:100%">Start your training now</button>
            </form>

        </div>
        <div class=" ml-4">
            <div class=" rounded-2xl">

                <div class="bg-white text-center  dark:bg-gray-600 dark:text-neutral-50" style="">

                    <div class="uppercase mb-6 bg-accent dark:text-neutral-50"> make sure your information are correct.
                    </div>


                    <div class="ml-12 mt-8">
                        <div class="mb-4 dark:text-neutral-50"> Student information </div>

                        @foreach ($users as $user)
                            @if ($student->uid == $user->id)
                                <div class="font-extralight">
                                    <div class="grid grid-cols-2  ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Name
                                        </div>
                                        <div class="col text-justify uppercase dark:text-neutral-50">{{ $user->name }}
                                        </div>
                                    </div>
                                </div>

                                <div class="font-extralight">
                                    <div class="grid grid-cols-2 ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Surname
                                        </div>
                                        <div class="col text-justify uppercase dark:text-neutral-50">
                                            {{ $student->surname }}</div>
                                    </div>
                                </div>
                                <div class="font-extralight">
                                    <div class="grid grid-cols-2 ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Email
                                        </div>
                                        <div class="col text-justify dark:text-neutral-50">{{ $user->email }}</div>
                                    </div>
                                </div>
                                <div class="font-extralight">
                                    <div class="grid grid-cols-2 ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50">
                                            Telephone</div>
                                        <div class="col text-justify dark:text-neutral-50 ">{{ $student->phonenumber }}
                                        </div>
                                    </div>
                                </div>

                                <div class="font-extralight">
                                    <div class="grid grid-cols-2 ">
                                        <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Adress
                                        </div>
                                        <div class="col text-justify dark:text-neutral-50 ">{{ $student->address }}
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>


                    <div class="ml-12 mt-12">
                        <div class="mb-4 dark:text-neutral-50"> Application information </div>
                        <div class="mb-2 font-light text-gray-600 dark:text-neutral-50"> Company information </div>
                        <div class="font-extralight">
                            <div class="grid grid-cols-2 ">
                                <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Company name
                                </div>
                                <div class="col text-justify uppercase dark:text-neutral-50">
                                    {{ $application->company_name }}</div>
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
                                <div class="col text-justify ">{{ $application->company_email }}</div>
                            </div>
                        </div>
                        <div class="font-extralight">
                            <div class="grid grid-cols-2 ">
                                <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Company fax
                                </div>
                                <div class="col text-justify uppercase">{{ $application->company_fax }}</div>
                            </div>
                        </div>

                        <div class="font-extralight">
                            <div class="grid grid-cols-2 ">
                                <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Company
                                    telephone</div>
                                <div class="col text-justify uppercase">{{ $application->company_phone }}</div>
                            </div>
                        </div>
                        <div class="font-extralight">
                            <div class="grid grid-cols-2 ">
                                <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Company web
                                    address</div>
                                <div class="col text-justify ">{{ $application->company_web_address }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card   m-4  rounded-2xl ">

                        <div class=" card-header  bg-slate-500 text-center uppercase text-white ">
                            Company description
                        </div>


                        <div class=" card-body m-4 text-start">
                            {{ $application->company_description }}
                        </div>

                    </div>
                    <div class="ml-12 mt-12 ">
                        <div class="mb-2 mt-2 font-light text-gray-600 dark:text-neutral-50"> Supervisor information
                        </div>
                        <div class="font-extralight">
                            <div class="grid grid-cols-2 ">
                                <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Name</div>
                                <div class="col text-justify uppercase">{{ $application->supervisor_name }}</div>
                            </div>
                        </div>
                        <div class="font-extralight">
                            <div class="grid grid-cols-2 ">
                                <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Surname</div>
                                <div class="col text-justify uppercase">{{ $application->supervisor_surname }}</div>
                            </div>
                        </div>
                        <div class="font-extralight">
                            <div class="grid grid-cols-2 ">
                                <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Email</div>
                                <div class="col text-justify ">{{ $application->supervisor_email }}</div>
                            </div>
                        </div>
                        <div class="font-extralight ">
                            <div class="grid grid-cols-2 ">
                                <div class="col text-left font-light text-gray-600 dark:text-neutral-50">Position</div>
                                <div class="col text-justify uppercase mb-12">{{ $application->supervisor_position }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="bg-primary text-center text-white uppercase  font-extrabold p-4 rounded-b-2xl ">
                    <h1>

                    </h1>
                </div>
            </div>
        </div>

    </div>







</x-app-layout>
