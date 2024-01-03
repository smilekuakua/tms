<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900  bg-gray-100 dark:bg-gray-900 p-4">

        <section class="max-w-4xl  mx-auto  rounded-md shadow-md bg-white dark:bg-gray-800 mt-20">
        <div class="grid grid-cols-1 gap-6  sm:grid-cols-2 sm:justify-center items-center  sm:pt-0 ">
            <div  class="bg-primary dark:bg-accent h-full flex items-center justify-center ">
                <a href="/" class=" ">
                    <img src="/images/logo.png" alt="logo">
                </a>
            </div>
             <div  class="p-6">
                {{ $slot }}
             </div>
        </div>
        </section>

    </body>
</html>
