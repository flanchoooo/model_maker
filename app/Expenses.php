<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{

    protected $fillable = [

        'raw_materials',
        'payroll_fixed',
        'payroll_variable',
        'repairs',
        'electricity',
        'insurance',
        'water',
        'rates',
        'safety',
        'security',
        'canteen',
        'supplies',
        'services',
        'production_overheads',
        'vehicle',
        'debt_one',
        'debt_two',
        'debt_three',
        'debt_four',
        'total_expenses',
        'co_id',
        'other',
        'safety_health',
        'month',

    ];


    protected $table  = 'expenses';
}
