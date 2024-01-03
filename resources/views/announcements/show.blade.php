<x-supervisor-layout>

    <div
        class="  overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
        <div class="w-3/3 p-4">
            <h1 class="text-2xl font-bold text-gray-900">
                {{ $announcements->title }}
            </h1>
            <p class="mt-2 text-sm text-gray-600">
                {{ $announcements->content }}
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Columns -->
                <div class="col w-100 col-span-2 mb-2"></div>
                <div class="col w-100  mb-2">
                    <div class="mt-6 flex justify-end">

                      <a href={{ route('announcement.edit', $announcements) }} class="inline-flex items-center px-4 py-2 bg-primary dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Edit</a>
                      <a href={{ route('announcement.destroy', $announcements) }} class="ms-3 inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Delete</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-supervisor-layout>
