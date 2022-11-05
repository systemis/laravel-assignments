<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    //
    function getIndex() {
      // $slide = Slide::all();
      return view('page.trangchu');
    }
}
