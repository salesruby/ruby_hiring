<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'first_name','last_name', 'country', 'state', 'city',
         'gender', 'email', 'phonenumber', 'cv', 
         'industry', 'job_title', 'experience'
    ];
}
