<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexadmin()
    {   
        return view('page/admin/home/homeadmin');
    }
    public function aboutedit()
    {   
        return view('page/admin/home/aboutedit');
    }
    public function productedit()
    {   
        return view('page/admin/home/productedit');
    }
    public function teamedit()
    {   
        return view('page/admin/home/teamedit');
    }
    public function producttambah()
    {   
        return view('page/admin/home/producttambah');
    }
    public function teamtambah()
    {   
        return view('page/admin/home/teamtambah');
    }
    public function portfolio()
    {
        return view('page/portfolio');
    }
    
}

