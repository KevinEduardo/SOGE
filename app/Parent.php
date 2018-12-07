<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    protected $fillable = [
        'mother_name', 'father_name', 'is_there_a_guardian', 'guardian_name', 'mother_birthdate', 'father_birthdate', 'guardian_birthdate', 'mother_education', 'father_education', 'guardian_education', 'mother_job', 'father_job', 'guardian_job', 'mother_workplace', 'father_workplace', 'guardian_workplace', 'mother_worktime_init', 'father_worktime_init', 'guardian_worktime_init', 'mother_worktime_end', 'father_worktime_end', 'guardian_worktime_end', 'mother_phone', 'father_phone', 'guardian_phone', 'mother_workphone', 'father_workphone', 'guardian_workphone',
    ];
}
