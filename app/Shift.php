<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    //
     protected $fillable = [
    'name',
    'shiftTime',
    'status'
    ];
}
