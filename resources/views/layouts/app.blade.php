<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Employee Management') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">

    <div class="min-h-screen flex">

        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white min-h-screen">

            <div class="p-6">
                <h1 class="text-xl font-bold">
                    Employee Management
                </h1>
            </div>

            <nav class="px-4 space-y-2">

                <a
                    href="{{ route('dashboard') }}"
                    class="block px-4 py-2 rounded hover:bg-gray-800"
                >
                    Dashboard
                </a>

                <a
                    href="/employees"
                    class="block px-4 py-2 rounded hover:bg-gray-800"
                >
                    Employees
                </a>

            </nav>

        </aside>

        <!-- Main Content -->
        <div class="flex-1">

            <!-- Header -->
            <header class="bg-white border-b px-6 py-4 flex justify-between items-center">

                <div>
                    @isset($header)
                        {{ $header }}
                    @endisset
                </div>

                <div class="flex items-center gap-4">

                    <span class="text-sm text-gray-600">
                        {{ Auth::user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button
                            type="submit"
                            class="text-sm text-red-600 hover:text-red-800"
                        >
                            Logout
                        </button>
                    </form>

                </div>

            </header>

            <!-- Page Content -->
            <main class="p-6">
                {{ $slot }}
            </main>

        </div>

    </div>

</body>
</html>