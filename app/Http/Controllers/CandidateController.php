<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use Illuminate\Support\Facades\Validator;
use App\Traits\CreateCandidate;


class CandidateController extends Controller
{
    use CreateCandidate;

    public function index(){
        $candidates = Candidate::all();
        return response()->json(['data' => $candidates]);
    }
    
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
        'first_name' => 'required',
        'last_name' => 'required',
        'cv' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'country' => 'required',
        'state' => 'required', 
        'phonenumber' => 'required'
       ]);

     if($validator->fails()){
       return response()->json(['data' => $validator->messages()]);
     }
        if($request->hasFile($request->cv)){
            
        }

        $candidate = $this->createCandidate($request->all()); 
       return response()->json(['data' => $candidate, 'status' => 200]);

    }

    public function update(Request $request, Candidate $candidate){

    //   return response()->json(['data' => $updated, 'status' => 200]);

    }

    public function show(Candidate $candidate){
        return response()->json(['data' => $candidate, 'status' => 200]);
    }
}
