<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';

    protected $fillable = [
        'is_deleted',
        'staff_name',
        'staff_image',
        'staff_position'
    ];
}
