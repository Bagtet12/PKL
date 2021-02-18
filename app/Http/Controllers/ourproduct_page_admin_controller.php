<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



class ourproduct_page_admin_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function c_ourproduct_page_admin()
    {
        // $abouts=about::where('id','1')->first();
        $event =\App\Event::all();
        $influencer = \App\Influencer::all();
        $creative = \App\Creative_Video::all();
        return view('page/admin/product/ourproduct_page_admin', compact('event','influencer','creative'));
    }
    public function eventmanagement_tambah()
        {   
            return view('page/admin/product/eventmanagement_tambah');
        }
        public function eventmanagement_edit($id)
        {   
            $event=Event::where('id',$id)->first();
            return view('page/admin/product/eventmanagement_edit',compact('event'));
        }
        public function saveevent(Request $request,$id)
        {   
            $event=Event::where('id',$id)->first();
            $event->gambar =$request->gambar;
            $event->judul =$request->judul;
            $event->deskripsi =$request->deskripsi;
            $event->update();
            return redirect('/ourproduct_page_admin')->with('data berhasil ditambah');
        }
        public function eventdelete($id){
            $event=Event::find($id);
            $event->delete();
            return redirect('/ourproduct_page_admin')->with('data berhasil dihapus');
    
        }
}
