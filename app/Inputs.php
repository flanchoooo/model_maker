<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inputs extends Model
{
    protected $fillable = [

        'co_id',
        'zfc',
        'ominia',
        'command',
        'pres_input_scheme',
        'selling_price',
        'start_period',
        'end_period',
        'total_inputs',
        'revenue',
        'month',

    ];

    protected $table  = 'revenue_projections';
}
