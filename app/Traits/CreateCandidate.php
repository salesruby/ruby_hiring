<?php 

namespace App\Traits;
use Illuminate\Http\Request;
use App\Candidate;

trait CreateCandidate{
    public function createCandidate(array $data){

      return Candidate::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'cv' => 'avartar.jpg',
            'country' => $data['country'],
            'state' => $data['state'],
            'city' => $data['city'],
            'phonenumber' => $data['phonenumber'],
            'gender' => $data['gender'],
        ]);

    }
}


