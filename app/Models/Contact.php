<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'email',
        'msg',
        'service_id',
        'mobile_no',
        'ip_address',
        'ip_location',
    ];


}
