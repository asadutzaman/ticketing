<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class query extends Model
{
    protected $fillable = [
        'calltype',
        'department',
        'phone',
        'c_name',
        'c_email',
        'query_sub',
        'query_details',
        'assign',
        'comment',
        'status'
    ];
}
