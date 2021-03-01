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
        $creative = \App\Creative_Video::all();
        return view ('page/ourproduct_page',compact('event','influencer','creative'));
    }
    
    public function portfolio(){
        $portfolio=\App\Portfolio::all();
        $partner=\App\Partner::all();
        return view('page/portfolio',compact('portfolio','partner'));
    }
    public function ourproduct(){
        return view ('page/ourproduct');
    }

}
