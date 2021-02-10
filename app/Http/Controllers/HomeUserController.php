<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function home(){
        $our_product = \App\Product::all();
        $team = \App\Team::all();
        return view ('page/home',['our_product' => $our_product],['team'=>$team]);
    }

}
