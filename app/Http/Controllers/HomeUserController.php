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
    public function ourproduct_page(){
        $event = \App\Event::all();
        $influencer =\App\Influencer::all();
        return view ('page/ourproduct_page',compact('event','influencer'));
    }
    
    public function portfolio(){

        return view('page/portfolio');
    }
    public function ourproduct(){
        return view ('page/ourproduct');
    }

}
