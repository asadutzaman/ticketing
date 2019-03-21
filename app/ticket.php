<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $fillable = [
        'calltype',
        'department',
        'phone',
        'c_name',
        'c_email',
        'c_address',
        'complain_sub',
        'complain_details',
        'assign',
        'comment',
        'status'
    ];
}
