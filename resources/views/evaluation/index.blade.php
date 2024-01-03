<x-app-layout>


    <div class="grid grid-cols-1 md:grid-cols-3 overflow-auto gap-3">

        <div class="col w-100  overflow-auto">

            <p class="  bg-primary text-center text-white uppercase p-4 font-extrabold rounded-t-lg">
                Manuel Application
            </p>
            <div class=" bg-white   dark:bg-gray-600 shadow-lg dark:text-white">

            </div>

        </div>
        <div class="col w-100 col-span-2 ">
            <form action="{{ route('evaluation.store') }}" method="POST" role="form text-left"
                class="bg-white p-5 dark:bg-gray-600">
                @csrf
                <table class="text-left w-full rounded-t-lg">

                    <thead class=" bg-primary text-white rounded-t-lg">
                        <tr>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Evaluation Criteria</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Poor</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Fair</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Good </th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Excellent </th>
                        </tr>
                    </thead>
                    <tbody class=" bg-white   dark:bg-gray-600 shadow-lg dark:text-white"
                        style="height: 50px; overflow: auto">


                        <tr>
                            <td class="py-4 px-6  border-grey-light">
                                Interest
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="interest" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="1"/>
                            </td>
                            <td class="py-4 px-6  border-grey-light">

                                <input name="interest" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="2"/>
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="interest" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="3"/>
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="interest" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="4"/>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-4 px-6  border-grey-light">
                                Attendance
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="attendance" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="2"/>
                            </td>
                            <td class="py-4 px-6  border-grey-light">

                                <input name="attendance" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="2" />
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="attendance" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="3"/>
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="attendance" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="4"/>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-4 px-6  border-grey-light">
                                Technical Knowledge and Ability
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="ability" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="1"/>
                            </td>
                            <td class="py-4 px-6  border-grey-light">

                                <input name="ability" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="2"/>
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="ability" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="3"/>
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="ability" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="4"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6  border-grey-light">
                                General Behavior
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="behavior" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="1"/>
                            </td>
                            <td class="py-4 px-6  border-grey-light">

                                <input name="behavior" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="2"/>
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="behavior" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="3"/>
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="behavior" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="4"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6  border-grey-light">
                                Overall Evaluation Result
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="overall" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="1"/>
                            </td>
                            <td class="py-4 px-6  border-grey-light">

                                <input name="overall" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="2"/>
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="overall" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="3"/>
                            </td>
                            <td class="py-4 px-6  border-grey-light">
                                <input name="overall" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-accent checked:before:bg-primary hover:before:opacity-10"
                                    id="react" value="4" />
                            </td>
                        </tr>

                        <tr>
                            <td colspan="5" class="">


                                <div class="m-5">

                                    <x-text-area id="summary" class=" mt-1 w-full" type="text" name="summary"
                                        placeholder="Summary of the Work Done during Internship" required />
                                    <x-input-error :messages="$errors->get('summary')" class="mt-2" />

                                </div>


                            </td>
                        </tr>


                        <tr>
                            <td colspan="5" class="">


                                <div class="mx-5 mb-2">

                                    <x-text-area id="comments" class=" mt-1 w-full" type="text" name="comments"
                                        placeholder="General Comments" required />
                                    <x-input-error :messages="$errors->get('summary')" class="mt-2" />

                                </div>


                            </td>
                        </tr>
                        <tr>
                            <input name="training_id" type="hidden" value={{$id}}>

                            <td colspan="" class="p-4">
                                <button type="submit"
                                    class="px-4 py-4 bg-primary dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                                    style="width:100%">Submit</button>
                            </td>
                            <td colspan="4" class="">

                            </td>
                        </tr>
                    </tbody>

                </table>
            </form>
        </div>
    </div>

</x-app-layout>
