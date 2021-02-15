<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function home(){
        $our_product = \App\Product::all();
        $team = \App\Team::all();
        $abouts = \App\about::first();
        return view ('page/home',compact('our_product','team','abouts'));
    }

}
