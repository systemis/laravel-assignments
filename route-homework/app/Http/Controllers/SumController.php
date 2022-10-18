<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function result(Request $request) {
        $sum = $request->soA + $request->soB;

        return view('sum',compact('sum'));
    }
}
