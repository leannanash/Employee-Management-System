<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

            <div>
                <h2 class="text-2xl font-semibold text-gray-800">
                    Employees
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Manage employee records and information.
                </p>
            </div>

            <a
                href="{{ url('/employees/create') }}"
                class="inline-flex items-center justify-center rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-medium text-white transition hover:bg-blue-700"
            >
                + Add Employee
            </a>

        </div>
    </x-slot>


    <div class="py-8">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">

                <div class="border-b border-gray-200 px-6 py-4">
                    <p class="text-sm text-gray-500">
                        {{ $employees->count() }}
                        {{ Str::plural('employee', $employees->count()) }}
                    </p>
                </div>


                <div class="overflow-x-auto">

                    <table class="min-w-full">

                        <thead class="bg-gray-50">

                            <tr>

                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                    ID
                                </th>

                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                    First Name
                                </th>

                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                    Last Name
                                </th>

                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                    Gender
                                </th>

                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                    Birthday
                                </th>

                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                    Monthly Salary
                                </th>

                                <th class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wider text-gray-500">
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-gray-100">

                            @forelse ($employees as $employee)

                                <tr class="transition hover:bg-gray-50">

                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                        #{{ $employee->id }}
                                    </td>

                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                        {{ $employee->first_name }}
                                    </td>

                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-700">
                                        {{ $employee->last_name }}
                                    </td>

                                    <td class="whitespace-nowrap px-6 py-4">

                                        <span class="inline-flex rounded-full bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-700">
                                            {{ $employee->gender }}
                                        </span>

                                    </td>

                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                        {{ $employee->birthday->format('M d, Y') }}
                                    </td>

                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                        ₱{{ number_format($employee->monthly_salary, 2) }}
                                    </td>

                                    <td class="whitespace-nowrap px-6 py-4">

                                        <div class="flex justify-end gap-2">

                                            <a
                                                href="{{ url('/employees/' . $employee->id . '/edit') }}"
                                                class="rounded-lg bg-gray-100 px-3 py-1.5 text-sm font-medium text-gray-700 transition hover:bg-gray-200"
                                            >
                                                Edit
                                            </a>

                                            <form
                                                method="POST"
                                                action="{{ url('/employees/' . $employee->id) }}"
                                            >
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="rounded-lg bg-red-50 px-3 py-1.5 text-sm font-medium text-red-600 transition hover:bg-red-100"
                                                    onclick="return confirm('Are you sure you want to delete this employee?')"
                                                >
                                                    Delete
                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td
                                        colspan="7"
                                        class="px-6 py-12 text-center"
                                    >

                                        <p class="text-sm font-medium text-gray-900">
                                            No employees found
                                        </p>

                                        <p class="mt-1 text-sm text-gray-500">
                                            Add an employee to get started.
                                        </p>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>