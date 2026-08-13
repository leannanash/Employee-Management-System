<x-app-layout>

    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-semibold text-gray-800">
                Edit Employee
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Update the employee's information below.
            </p>
        </div>
    </x-slot>

    <div class="py-8">

        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">

            <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm sm:p-8">

                <form
                    method="POST"
                    action="{{ url('/employees/' . $employee->id) }}"
                    class="space-y-6"
                >

                    @csrf
                    @method('PUT')


                    <!-- First Name -->
                    <div>

                        <label
                            for="first_name"
                            class="block text-sm font-medium text-gray-700"
                        >
                            First Name
                        </label>

                        <input
                            id="first_name"
                            type="text"
                            name="first_name"
                            value="{{ old('first_name', $employee->first_name) }}"
                            class="mt-2 block w-full rounded-lg border-gray-300 px-3 py-2.5 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Enter first name"
                            required
                        >

                        @error('first_name')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- Last Name -->
                    <div>

                        <label
                            for="last_name"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Last Name
                        </label>

                        <input
                            id="last_name"
                            type="text"
                            name="last_name"
                            value="{{ old('last_name', $employee->last_name) }}"
                            class="mt-2 block w-full rounded-lg border-gray-300 px-3 py-2.5 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Enter last name"
                            required
                        >

                        @error('last_name')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- Gender -->
                    <div>

                        <label
                            for="gender"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Gender
                        </label>

                        <select
                            id="gender"
                            name="gender"
                            class="mt-2 block w-full rounded-lg border-gray-300 px-3 py-2.5 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            required
                        >

                            <option
                                value="Male"
                                {{ old('gender', $employee->gender) === 'Male' ? 'selected' : '' }}
                            >
                                Male
                            </option>

                            <option
                                value="Female"
                                {{ old('gender', $employee->gender) === 'Female' ? 'selected' : '' }}
                            >
                                Female
                            </option>

                        </select>

                        @error('gender')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- Birthday -->
                    <div>

                        <label
                            for="birthday"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Birthday
                        </label>

                        <input
                            id="birthday"
                            type="date"
                            name="birthday"
                            value="{{ old('birthday', $employee->birthday->format('Y-m-d')) }}"
                            max="{{ date('Y-m-d') }}"
                            class="mt-2 block w-full rounded-lg border-gray-300 px-3 py-2.5 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            required
                        >

                        @error('birthday')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- Monthly Salary -->
                    <div>

                        <label
                            for="monthly_salary"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Monthly Salary
                        </label>

                        <div class="relative mt-2">

                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                                ₱
                            </span>

                            <input
                                id="monthly_salary"
                                type="number"
                                name="monthly_salary"
                                value="{{ old('monthly_salary', $employee->monthly_salary) }}"
                                step="0.01"
                                min="0"
                                class="block w-full rounded-lg border-gray-300 py-2.5 pl-8 pr-3 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                placeholder="0.00"
                                required
                            >

                        </div>

                        @error('monthly_salary')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- Buttons -->
                    <div class="flex items-center justify-end gap-3 border-t border-gray-100 pt-6">

                        <a
                            href="{{ url('/employees') }}"
                            class="rounded-lg border border-gray-300 px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-50"
                        >
                            Cancel
                        </a>

                        <button
                            type="submit"
                            class="rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                        >
                            Update Employee
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>