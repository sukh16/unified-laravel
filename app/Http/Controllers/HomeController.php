<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Manufacturer;

class HomeController extends Controller
{
    public function index(){
        $manufactures = Manufacturer::get();
        return view('frontend.index',compact('manufactures'));
    }
}