<div class="event-form  bg-white p-5 mb-3  rounded-2xl">
    <h3>Add Event</h3>

    <form id="eventForm" action="{{ route('events.store') }}">

        @csrf

        <div class=" mt-3 mb-3">
            <input type="text" placeholder="Event Title" id="eventTitle"
                class="block mt-1 w-full  border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300   rounded-md shadow-sm"
                required>
        </div>

        <div class="grid grid-cols-2">

            <div>
                <label for="startDate">Start Date:</label>
                <input type="date" id="startDate"
                    class="block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300   rounded-md shadow-sm"required>
            </div>

            <div class="ml-2">
                <label for="endDate">End Date:</label>
                <input type="date" id="endDate"
                    class=" block  w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300   rounded-md shadow-sm"
                    required>

            </div>

        </div>
        <button type="button" onclick="addEvent()"
            class=" mt-3 text-center  w-full  px-4 py-4 bg-primary dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Add
            Event</button>
    </form>
</div>
