<x-guest-layout>

    <div class="grid grid-cols-2 gap-5">

        <button
           class="p-4 rounded bg-white text-primary shadow-md"
           data-te-toggle="pill" data-te-target="#tabs-home" data-te-nav-active role="tab" aria-controls="tabs-home"
           aria-selected="true" onclick="openTab(event, 'Student')" id="defaultOpen">Student</button>
        <button
           class="p-4 rounded bg-white text-primary shadow-md"
           data-te-toggle="pill" data-te-target="#tabs-home" data-te-nav-active role="tab"
            aria-controls="tabs-home" aria-selected="true" onclick="openTab(event, 'Worker')">No student</button>
        </button>
     </div>


    <div id="Student"
    class="tabcontent dark:text-gray-300 mt-3 " role="tabpanel"
    aria-labelledby="tabs-home-tab" data-te-tab-active>
        @include('auth.partials.student-form')
    </div>

    <div id="Worker" class="tabcontent dark:text-gray-300 mt-3 " role="tabpanel"
        aria-labelledby="tabs-home-tab" data-te-tab-active>
        @include('auth.partials.supervisor-form')

    </div>


    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += "active";
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</x-guest-layout>

