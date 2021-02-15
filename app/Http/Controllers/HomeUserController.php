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
    public function product_page(){
        $ourproduct_page = \App\Product::all();
        return view ('page/ourproduct_page',compact('ourproduct_page'));
    }
    public function portfolio(){

        return view('page/portfolio');
    }
    public function ourproduct(){
        return view ('page/ourproduct');
    }

}
