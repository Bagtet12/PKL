<?php

namespace App\Http\Controllers;

use App\about;
// use about;
use Illuminate\Pagination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function indexadmin()
    {   
        $abouts=about::where('id','1')->first();

        return view('page/admin/home/homeadmin', compact('abouts'));
    }
    public function aboutedit()
    {   
        $abouts=about::where('id','1')->first();
        return view('page/admin/home/aboutedit',compact('abouts'));
        
    }
    public function aboutupdate(Request $request)
    {   
        $abouts=about::where('id','1')->first();
        $abouts->judul =$request->judul;
        $abouts->deskripsi =$request->deskripsi;
        $abouts->visi =$request->visi;
        $abouts->misi =$request->misi;
        $abouts->quotes =$request->quotes;
        $abouts->update();
        
        // Alert()->success(' Sukses diupdate', 'Success');
    	return redirect('homeadmin#about');
        
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
    public function create(Request $request){
        \App\Product::create($request->all());
        return redirect('/homeadmin')->with('data berhasil ditambah');
    }
    public function teamtambah()
    {   
        return view('page/admin/home/teamtambah');
    }
    public function create_team(Request $request){
        \App\Team::create($request->all());
        return redirect('/homeadmin')->with('data berhasil ditambah');
    }   
    public function portfolio(){

        return view('page/portfolio');
    }
    public function ourproduct(){
        return view ('page/ourproduct');
    }
    
}

