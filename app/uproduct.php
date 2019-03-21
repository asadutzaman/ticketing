<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class uproduct extends Model
{
    protected $fillable = [
        'calltype',
        'department',
        'phone',
        'c_name',
        'product_name',
        'product_sub',
        'product_details',
        'assign',
        'comment',
        'status'
    ];
}
