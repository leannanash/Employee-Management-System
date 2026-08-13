<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold">
            Summary
        </h2>
    </x-slot>

    <div class="space-y-6">

        <h1 class="text-2xl font-bold">
            Employee Summary
        </h1>

        <!-- Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Male Employees -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-gray-500 text-sm">
                    Male Employees
                </h2>

                <p class="text-3xl font-bold mt-2">
                    {{ $maleEmployees }}
                </p>
            </div>

            <!-- Female Employees -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-gray-500 text-sm">
                    Female Employees
                </h2>

                <p class="text-3xl font-bold mt-2">
                    {{ $femaleEmployees }}
                </p>
            </div>

            <!-- Average Age -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-gray-500 text-sm">
                    Average Age
                </h2>

                <p class="text-3xl font-bold mt-2">
                    {{ number_format($averageAge, 1) }}
                    <span class="text-base font-normal">years</span>
                </p>
            </div>

            <!-- Total Monthly Salary -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-gray-500 text-sm">
                    Total Monthly Salary
                </h2>

                <p class="text-3xl font-bold mt-2">
                    ₱{{ number_format($totalSalary, 2) }}
                </p>
            </div>

        </div>

        <!-- Employee Management -->
        <div class="bg-white p-6 rounded-lg shadow">

            <h2 class="text-xl font-semibold mb-4">
                Employee Management
            </h2>

            <a
                href="/employees"
                class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
            >
                Manage Employees
            </a>

        </div>

    </div>

</x-app-layout>