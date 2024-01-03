<x-supervisor-layout>


    <!-- Grid wrapper -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
        <!-- Columns -->
        <div class="col w-100 col-span-3 mb-2 bg-inherit ">

            <div class="flex flex-col m-auto p-auto">
                <h1 class="flex p-2 font-bold text-4xl text-gray-800  dark:text-neutral-50 ">
                    Announcements
                </h1>
                <div class="flex overflow-x-scroll pb-2 hide-scroll-bar mb-4">
                    <div class="flex flex-nowrap  ">



                        @foreach ($announcements as $announce)
                            <a href="{{ route('announcement.show', ['id' => $announce->id]) }}">
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
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="bg-primary text-center text-white uppercase p-4 font-extrabold rounded-t-2xl ">
                <h1>Create an announcement</h1>
            </div>
            <form action="{{ route('announcement.store') }}" method="POST" role="form text-left"
                class="bg-white p-5 dark:bg-gray-600">
                @csrf
                <!-- Input fields for application data, e.g., company_name, working_field, etc. -->
                <!-- Example: -->
                <div class="m-4">

                    <div class="mb-3">

                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                            placeholder="Title" required />

                        <x-input-error :messages="$errors->get('title')" class="mt-2" />

                    </div>
                    <div class="mb-3">

                        <x-text-area id="content" class=" mt-1 w-full" type="content" name="content"
                            placeholder="Content" required />
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />

                    </div>
                </div>

                <div class="text-center ">

                    <button type="submit"
                        class="btn bg-accent text-white p-4 rounded-xl hover:bg-gray-600  dark:hover:bg-gray-800  dark:bg-primary"
                        style="width:100%">Submit</button>
                </div>
            </form>
        </div>

    </div>

</x-supervisor-layout>
