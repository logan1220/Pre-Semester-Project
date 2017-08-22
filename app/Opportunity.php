<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $fillable = [
        'name',
        'address1',
        'address2',
        'city',
        'state',
        'volunteer_center',
        'licenses',
        'skills',
        'weekday_availability_start',
        'weekday_availability_end',
        'weekend_availability_start',
        'weekend_availability_end',
    ];
}
