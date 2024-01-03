<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-3 overflow-auto gap-3">
        <div class="col w-100 col-span-2 ">
            <div class="bg-primary text-center text-white uppercase p-4 font-extrabold rounded-t-lg">
                <h1>Online Application</h1>
            </div>
            <form action="{{ route('application.store') }}" method="POST" role="form text-left"
                class="bg-white p-5 dark:bg-gray-600">
                @csrf
                <!-- Input fields for application data, e.g., company_name, working_field, etc. -->
                <!-- Example: -->
                <div class="m-4">

                    <div class="mb-3">

                        <x-text-input id="company_name" class="block mt-1 w-full" type="text" name="company_name"
                            placeholder="Company name" required />

                        <x-input-error :messages="$errors->get('company_name')" class="mt-2" />

                    </div>

                    <div class="mb-3">

                        <x-text-input id="working_field" class="block mt-1 w-full" type="text" name="working_field"
                            placeholder="Working Field" required />

                        <x-input-error :messages="$errors->get('working_field')" class="mt-2" />

                    </div>

                    <div class="mb-3">

                        <x-text-input id="company_address" class="block mt-1 w-full" type="text"
                            name="company_address" placeholder="Company Address" required />

                        <x-input-error :messages="$errors->get('company_address')" class="mt-2" />

                    </div>



                    <div class="mb-3">

                        <x-text-input id="company_fax" class="block mt-1 w-full" type="text" name="company_fax"
                            placeholder="Company Fax" />

                        <x-input-error :messages="$errors->get('company_fax')" class="mt-2" />

                    </div>


                    <div class="mb-3">
                        <x-text-input id="company_phone" class=" mt-1 w-full" type="text" name="company_phone"
                            placeholder="Company Phone" required />
                        <x-input-error :messages="$errors->get('company_phone')" class="mt-2" />

                    </div>

                    <div class="mb-3">

                        <x-text-input id="company_email" class=" mt-1 w-full" type="email" name="company_email"
                            placeholder="Company Email" required />
                        <x-input-error :messages="$errors->get('company_email')" class="mt-2" />

                    </div>

                    <div class="mb-3">

                        <x-text-input id="company_web_address" class=" mt-1 w-full" type="text"
                            name="company_web_address" placeholder="Company Web Address" />
                        <x-input-error :messages="$errors->get('company_web_address')" class="mt-2" />

                    </div>

                    <div class="mb-3">

                        <x-text-area id="company_description" class=" mt-1 w-full" type="text"
                            name="company_description" placeholder="Company Description" required />
                        <x-input-error :messages="$errors->get('company_description')" class="mt-2" />

                    </div>

                    <div class="mb-3">

                        <x-text-input id="supervisor_name" class=" mt-1 w-full" type="text" name="supervisor_name"
                            placeholder="Supervisor Name" />
                        <x-input-error :messages="$errors->get('supervisor_name')" class="mt-2" />

                    </div>

                    <div class="mb-3">

                        <x-text-input id="supervisor_surname" class=" mt-1 w-full" type="text"
                            name="supervisor_surname" placeholder="Supervisor Surname" required />
                        <x-input-error :messages="$errors->get('supervisor_surname')" class="mt-2" />

                    </div>

                    <div class="mb-3">

                        <x-text-input id="supervisor_email" class=" mt-1 w-full" type="email" name="supervisor_email"
                            placeholder="Supervisor Email" required />
                        <x-input-error :messages="$errors->get('supervisor_email')" class="mt-2" />

                    </div>

                    <div class="mb-3">

                        <x-text-input id="supervisor_position" class=" mt-1 w-full" type="text"
                            name="supervisor_position" placeholder="Supervisor Position" required />
                        <x-input-error :messages="$errors->get('supervisor_position')" class="mt-2" />

                    </div>

                </div>
                <!-- Add input fields for other application data -->
                <div class="text-center ">

                    <button type="submit"
                        class="btn bg-accent text-white p-4 hover:bg-gray-600  dark:hover:bg-gray-800  dark:bg-primary"
                        style="width:100%">Submit</button>
                </div>

            </form>
        </div>

        <div class="col w-100  overflow-auto">
            <p class="  bg-primary text-center text-white uppercase p-4 font-extrabold rounded-t-lg">
                Manuel Application
            </p>
            <div class="bg-white text-center text-primary p-4 dark:bg-gray-600">

                <p class=" text-black  dark:text-white ">
                    If you want to do a manuel application just follow the steps.
                </p>

                <ol class=" grid grid-cols-1  overflow-auto">
                    <li
                        class="flex items-center text-primary ml-9 mt-3 dark:text-white space-x-2.5 rtl:space-x-reverse">
                        <span
                            class="flex items-center justify-center w-8 h-8 border border-primary rounded-full shrink-0 dark:border-white">
                            1
                        </span>
                        <span class="block w-96">
                            <h3 class="font-bold leading-tight">Download</h3>
                            <p class="text-sm">Download the docs file</p>
                        </span>
                    </li>
                    <li
                        class="flex items-center text-primary ml-9 mt-3 dark:text-white space-x-2.5 rtl:space-x-reverse">
                        <span
                            class="flex items-center justify-center w-8 h-8 border border-primary rounded-full shrink-0 dark:border-white">
                            2
                        </span>
                        <span class="block w-96">
                            <h3 class=" font-bold leading-tight">Fill</h3>
                            <p class="text-sm">fill the download file </p>
                        </span>
                    </li>
                    <li
                        class="flex items-center text-primary ml-9 mt-3 dark:text-white space-x-2.5 rtl:space-x-reverse">
                        <span
                            class="flex items-center justify-center w-8 h-8 border border-primary rounded-full shrink-0 dark:border-white">
                            3
                        </span>
                        <span class="block w-96">
                            <h3 class="font-bold leading-tight">Upload the filed file</h3>
                            <p class="text-sm">Step details here</p>
                        </span>
                    </li>
                </ol>
            </div>

         <x-select/>


        </div>
    </div>





    <script></script>
</x-app-layout>
