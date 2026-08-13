<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'birthday',
        'monthly_salary',
    ];

    protected $casts = [
        'birthday' => 'date',
        'monthly_salary' => 'decimal:2',
    ];
}