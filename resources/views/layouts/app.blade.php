<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @notifyCss
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <!-- Make sure to replace the asset path with the correct path to your jQuery file -->
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('c2d6c16c11fb34433d37', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('popup-channel');
        channel.bind('user-registred', function(data) {
            toastr.success(JSON.stringify(data.user) + 'has been registraded as' + JSON.stringify(data.message))

        });
    </script>

</head>

<body class="font-sans antialiased  bg-gray-100 dark:bg-gray-900">
    <div class="">
        <div x-data="{ sidebarOpen: false }" class="flex h-screen  font-roboto">
            @include('layouts.sidenav')

            <div class="flex-1 flex flex-col ">
                @include('layouts.navigation')

                <main class="">
                    <div class="container mx-auto px-6 py-8 overflow-y-auto ">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </div>
    <x-notify::notify />
    @notifyJs
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                // Make an AJAX request to get dynamic data from the server
                $.get('/getDynamicData', function(data) {
                    // Initialize an empty string to store the HTML content
                    var body = "<ul class='divide-y'> ";

                    // Loop through each row in the data
                    data.forEach(function(row) {
                        // Display data only from columns with specific titles

                        body +=
                            "<li class=' capitalize'> ";
                        body +=
                            "<div  class='relative  mb-2 mt-2 max-w-sm rounded-lg  dark:bg-gray-600 p-4 w-100 dark:text-neutral-50'> ";
                        body += "<p class='relative text-sm font-medium'> "
                        body += "<span class='text-gray-700 dark:text-neutral-50'>";
                        body += row.title;
                        body += "</span>"

                        body += '</p>';
                        body += "<p  class=' truncate w-96 text-sm text-gray-600 dark:text-neutral-50'>";
                        body += row.content;
                        "</p> "
                        body += "</div> ";
                        body += '</li>';

                    });
                    // Close the unordered list
                    body += '</ul>';

                    // Update the #show div with the concatenated content
                    $('#show').html(body);
                });
            }, 1000);
        });
    </script>

</body>

</html>
