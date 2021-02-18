<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Event;
use App\Influencer;
use App\Creative_Video;

use Illuminate\Pagination;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\If_;
use Product as GlobalProduct;



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
    public function create_event(Request $request){
        $this->validate($request, [
			'gambar' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required',
			'deskripsi' => 'required',
            'link_website' =>'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('gambar');
 
		$nama_file = time()."_"."$request->nama"."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'gambar';
		$file->move($tujuan_upload,$nama_file);
 
		Event::create([
			'gambar' => $nama_file,
            'judul' => $request->judul,
			'deskripsi' => $request->deskripsi,
            'link_website'=>$request->link_website,
		]);
 
		
        return redirect('/ourproduct_page_admin')->with('data berhasil ditambah');
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
            
            $event=Event::findorfail($id);
        if ($request->gambar==null){
            $awal=$event->gambar;
        }else{
            
            $file = $request->file('gambar');
            $awal=time()."_"."$request->nama"."_".$file->getClientOriginalName();
            $tujuan='gambar';
            $file->move($tujuan,$awal);
            
        }

        $up=[
            'gambar'=>$awal,
            'judul'=> $request['judul'],
            'deskripsi'=> $request['deskripsi'],
            'link_website'=>$request['link_website'],
        ];
        $event->update($up);
            return redirect('/ourproduct_page_admin')->with('data berhasil ditambah');
        }
        public function eventdelete($id){
            $event=Event::find($id);
            $event->delete();
            return redirect('/ourproduct_page_admin')->with('data berhasil dihapus');
    
        }

        public function influencertambah()
        {   
            return view('page/admin/product/influencertambah');
        }
        public function influencer_edit($id)
        {   
            $influencer=Influencer::where('id',$id)->first();
            return view('page/admin/product/influenceredit',compact('influencer'));
        }
        public function influencerdelete($id){
            $influencer=Influencer::find($id);
            $influencer->delete();
            return redirect('/ourproduct_page_admin')->with('data berhasil dihapus');
        }
        public function create_influencer(Request $request){
            $this->validate($request, [
                'gambar' => 'required|file|mimes:jpeg,png,jpg|max:2048',
                'judul' => 'required',
                'deskripsi' => 'required',
                'link_instagram' =>'required',
            ]);
     
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('gambar');
     
            $nama_file = time()."_"."$request->nama"."_".$file->getClientOriginalName();
     
                      // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'gambar';
            $file->move($tujuan_upload,$nama_file);
     
            Influencer::create([
                'gambar' => $nama_file,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'link_instagram'=>$request->link_instagram,
            ]);
     
            
            return redirect('/ourproduct_page_admin')->with('data berhasil ditambah');
        }
        public function saveinfluencer(Request $request,$id)
        {   
            
            $influencer=Influencer::findorfail($id);
        if ($request->gambar==null){
            $awal=$influencer->gambar;
        }else{
            
            $file = $request->file('gambar');
            $awal=time()."_"."$request->nama"."_".$file->getClientOriginalName();
            $tujuan='gambar';
            $file->move($tujuan,$awal);
            
        }

        $up=[
            'gambar'=>$awal,
            'judul'=> $request['judul'],
            'deskripsi'=> $request['deskripsi'],
            'link_instagram'=>$request['link_instagram'],
        ];
        $influencer->update($up);
            return redirect('/ourproduct_page_admin')->with('data berhasil ditambah');
        }

}
