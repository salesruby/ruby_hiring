<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JD;
use Illuminate\Support\Facades\Validator;
use App\Traits\CreateJD;

class JDController extends Controller
{
    use CreateJD;

    public function index(){
        $jds = JD::all();
        return response()->json(['data' => $JDs]);
    }
    
    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [
        'name' => 'required',
        'company' => 'required',
        'jd' => 'required',
        'email' => 'required',
        'country' => 'required',
        'state' => 'required', 
        'phonenumber' => 'required'
       ]);

     if($validator->fails()){
       return response()->json(['data' => $validator->messages()]);
     }
        $this->createJD($request->all());
    }

    public function update(Request $request, JD $jd){

        // return $JD;
        $updated = $jd->update($request->all());

        return response()->json(['data' => $updated, 'status' => 200]);

    }

    public function show(JD $jd){
        return response()->json(['data' => $jd, 'status' => 200]);
    }
}
