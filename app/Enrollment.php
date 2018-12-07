<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
        'offspring_id', 'classe_id', 'user_id', 'first_school_id', 'second_school_id', 'via_internet', 'random_school', 'finished', 
    ];
}
