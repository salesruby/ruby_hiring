<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class SearchController extends Controller
{
    public function search(){
        $result = QueryBuilder::for(Candidate::class)
            ->allowedFilters(['first_name', 'last_name', 'email', 'industry', 'roles', 'experience', 'state'])
            ->get();
        return response()->json($result);
    }
}
