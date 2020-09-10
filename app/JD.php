<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JD extends Model
{
    protected $fillable = [
        'name','jd', 'country', 'state', 'city',
         'status', 'email', 'phonenumber', 'address'
    ];
}
