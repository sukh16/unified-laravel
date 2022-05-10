<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\News;
use App\Models\Manufacturer;

class AboutController extends Controller
{
    public function manufacturers(){
        $manufacturerList = Manufacturer::orderBy('id','desc')->get();
        return view('frontend.manufacturers',compact('manufacturerList'));
    }
}
