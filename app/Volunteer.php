<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'username',
        'password',
        'address1',
        'address2',
        'city',
        'state',
        'zip',
        'phone_home',
        'phone_cell',
        'phone_work',
        'drivers_license',
        'ssn',
        'approval_status',
        'volunteer_centers',
        'skills',
        'weekday_availability_start',
        'weekday_availability_end',
        'weekend_availability_start',
        'weekend_availability_end',
        'education',
        'licenses',
        'emergency_fname',
        'emergency_lname',
        'emergency_address1',
        'emergency_address2',
        'emergency_city',
        'emergency_state',
        'emergency_zip',
        'emergency_phone_home',
        'emergency_phone_cell',
    ];
}
