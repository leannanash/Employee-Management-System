<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'User Management System') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex bg-gray-100 dark:bg-gray-900">

            <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden bg-gradient-to-br from-indigo-600 via-indigo-700 to-purple-800">
                <img
                    src="https://cdn.photoroom.com/v2/image-cache?path=gs://background-7ef44.appspot.com/backgrounds_v3/calming/49_calming.jpg"
                    alt=""
                    class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-60"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/80 via-indigo-800/30 to-transparent"></div>

                <div class="relative z-10 flex flex-col justify-between p-12 text-white w-full">
                    <a href="/" class="flex items-center gap-2">
                        <x-application-logo class="w-10 h-10 fill-current text-white" />
                        <span class="text-xl font-semibold">{{ config('app.name', 'Laravel') }}</span>
                    </a>

                    <div class="max-w-md">
                        <h1 class="text-4xl font-bold leading-tight mb-4">
                            Welcome back.
                        </h1>
                        <p class="text-indigo-100 text-lg">
                            Sign in to pick up right where you left off.
                        </p>
                    </div>

                    <p class="text-sm text-indigo-200">
                        &copy; {{ date('Y') }} {{ config('app.name', 'User Management System') }}. All rights reserved.
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col justify-center items-center px-6 py-12 sm:px-12">

                <div class="lg:hidden mb-8">
                    <a href="/">
                        <x-application-logo class="w-16 h-16 fill-current text-indigo-600" />
                    </a>
                </div>

                <div class="w-full max-w-md">
                    {{ $slot }}
                </div>
            </div>

        </div>
    </body>
</html>