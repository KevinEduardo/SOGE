<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offspring extends Model
{
    protected $fillable = [
        'parent_id', 'fullname', 'gender', 'birthdate', 'address', 
    ];
}
