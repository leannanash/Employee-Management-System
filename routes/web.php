<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/dashboard', function () {

    $maleEmployees = Employee::where('gender', 'Male')->count();

    $femaleEmployees = Employee::where('gender', 'Female')->count();

    $totalSalary = Employee::sum('monthly_salary');

    $employees = Employee::all();

    $averageAge = $employees->isNotEmpty()
        ? $employees->avg(function ($employee) {
            return $employee->birthday->age;
        })
        : 0;

    return view('dashboard', compact(
        'maleEmployees',
        'femaleEmployees',
        'averageAge',
        'totalSalary'
    ));

})->middleware('auth')->name('dashboard');


Route::middleware('auth')->group(function () {

    // Employee list
    Route::get('/employees', [EmployeeController::class, 'index'])
        ->name('employees.index');

    // Create employee form
    Route::get('/employees/create', [EmployeeController::class, 'create'])
        ->name('employees.create');

    // Store employee
    Route::post('/employees', [EmployeeController::class, 'store'])
        ->name('employees.store');

    // Edit employee form
    Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])
        ->name('employees.edit');

    // Update employee
    Route::put('/employees/{employee}', [EmployeeController::class, 'update'])
        ->name('employees.update');

    // Delete employee
    Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])
        ->name('employees.destroy');
});


require __DIR__.'/auth.php';