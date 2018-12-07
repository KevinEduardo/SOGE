<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registry extends Model
{
    // Waiting for consultants.
    protected $fillable = [
        'name', 'classe_id', 'enrollment_id',
    ];
}
