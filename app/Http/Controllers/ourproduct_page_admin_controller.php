<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Event;
use App\Influencer;
use App\Creative_Video;
use App\User;
use File;
use Alert;
use Illuminate\Pagination;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\If_;
use Product as GlobalProduct;
use Illuminate\Support\Facades\Auth as FacadesAuth;



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
			'gambar' => 'required|file|mimes:jpeg,png,jpg|max:2048000',
            'judul' => 'required',
			'deskripsi' => 'required',
            
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('gambar');
 
		$nama_file = time()."_"."$request->nama"."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'gambar/event_management';
		$file->move($tujuan_upload,$nama_file);
        if(empty($request->link_website)){
            $link_website="1";
        }
        else{
            $link_website=$request->link_website;
        }   
        $nama=User::where('id', FacadesAuth::user()->id)->first();
        $name=$nama->name;
		Event::create([
			'gambar' => $nama_file,
            'judul' => $request->judul,
			'deskripsi' => $request->deskripsi,
            'link_website'=>$link_website,
            'createby' =>$name,
		]);
 
		alert('Data Berhasil Di Tambah');
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
            $request->validate([
                'gambar'=>'image|mimes:jpeg,jpg,png|max:24800'
            ]);

            $event=Event::findorfail($id);
        if ($request->gambar==null){
            $awal=$event->gambar;
        }else{
            
            $file = $request->file('gambar');
            $awal=time()."_"."$request->nama"."_".$file->getClientOriginalName();
            $tujuan='gambar/event_management';
            $file->move($tujuan,$awal);
            
        }
        $nama=User::where('id', FacadesAuth::user()->id)->first();
        $name=$nama->name;
        $up=[
            'gambar'=>$awal,
            'judul'=> $request['judul'],
            'deskripsi'=> $request['deskripsi'],
            'link_website'=>$request['link_website'],
            'editby'=>$name,
        ];
        $event->update($up);
            alert('Data Berhasil Di Edit');
            return redirect('/ourproduct_page_admin')->with('data berhasil ditambah');
        }
        public function eventdelete($id){
            $event=Event::find($id);
            $event->delete();
            File::delete('gambar/event_management/'.$event->gambar);
            alert('Data Berhasil Di Delete');
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
            File::delete('gambar/influencer/'.$influencer->gambar);
            alert('Data Berhasil Di Hapus');
            return redirect('/ourproduct_page_admin')->with('data berhasil dihapus');
        }
        public function create_influencer(Request $request){
            $this->validate($request, [
                'gambar' => 'required|file|mimes:jpeg,png,jpg|max:2048000',
                'judul' => 'required',
                'deskripsi' => 'required',
                
            ]);
     
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('gambar');
     
            $nama_file = time()."_"."$request->nama"."_".$file->getClientOriginalName();
     
                      // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'gambar/influencer';
            $file->move($tujuan_upload,$nama_file);
            if(empty($request->link_instagram)){
                $link_instagram="1";
            }
            else{
                $link_instagram=$request->link_instagram;
            }
            $nama=User::where('id', FacadesAuth::user()->id)->first();
            $name=$nama->name;
            Influencer::create([
                'gambar' => $nama_file,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'link_instagram'=>$link_instagram,
                'createby'=>$name,
            ]);
     
            alert('Data Berhasil Di Tambah');
            return redirect('/ourproduct_page_admin')->with('data berhasil ditambah');
        }
        public function saveinfluencer(Request $request,$id)
        {   
            $request->validate([
                'gambar'=>'image|mimes:jpeg,jpg,png|max:24800'
            ]);

            $influencer=Influencer::findorfail($id);
        if ($request->gambar==null){
            $awal=$influencer->gambar;
        }else{
            
            $file = $request->file('gambar');
            $awal=time()."_"."$request->nama"."_".$file->getClientOriginalName();
            $tujuan='gambar/influencer';
            $file->move($tujuan,$awal);
            
        }
        $nama=User::where('id', FacadesAuth::user()->id)->first();
        $name=$nama->name;
        $up=[
            'gambar'=>$awal,
            'judul'=> $request['judul'],
            'deskripsi'=> $request['deskripsi'],
            'link_instagram'=>$request['link_instagram'],
            'editby' => $name,
        ];
        $influencer->update($up);
            alert('Data Berhasil Di Edit');
            return redirect('/ourproduct_page_admin')->with('data berhasil ditambah');
        }

        public function creativetambah()
        {   
            return view('page/admin/product/creativetambah');
        }
        public function creative_edit($id)
        {   
            $creative=Creative_Video::where('id',$id)->first();
            return view('page/admin/product/creativeedit',compact('creative'));
        }
        public function creativedelete($id){
            $creative=Creative_Video::find($id);
            $creative->delete();
            File::delete('gambar/creative_video/'.$creative->gambar);
            alert('Data Berhasil Di Hapus');
            return redirect('/ourproduct_page_admin')->with('data berhasil dihapus');
        }
        public function create_creative(Request $request){
            $this->validate($request, [
                'gambar' => 'required|file|mimes:jpeg,png,jpg|max:2048000',
                'judul' => 'required',
                'deskripsi' => 'required',
            ]);
     
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('gambar');
     
            $nama_file = time()."_"."$request->nama"."_".$file->getClientOriginalName();
     
                      // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'gambar/creative_video';
            $file->move($tujuan_upload,$nama_file);
            if(empty($request->link_video)){
                $link_video="1";
            }
            else{
                $link_video=$request->link_video;
            }
            $nama=User::where('id', FacadesAuth::user()->id)->first();
            $name=$nama->name;
            Creative_Video::create([
                'gambar' => $nama_file,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'link_video'=>$link_video,
                'createby'=>$name,
            ]);
     
            alert('Data Berhasil di Tambah');
            return redirect('/ourproduct_page_admin')->with('data berhasil ditambah');
        }
        public function savecreative(Request $request,$id)
        {   
            $request->validate([
                'gambar'=>'image|mimes:jpeg,jpg,png|max:24800'
            ]);
            
            $creative=Creative_Video::findorfail($id);
        if ($request->gambar==null){
            $awal=$creative->gambar;
        }else{
            
            $file = $request->file('gambar');
            $awal=time()."_"."$request->nama"."_".$file->getClientOriginalName();
            $tujuan='gambar/creative_video';
            $file->move($tujuan,$awal);
            
        }
        $nama=User::where('id', FacadesAuth::user()->id)->first();
        $name=$nama->name;
        $up=[
            'gambar'=>$awal,
            'judul'=> $request['judul'],
            'deskripsi'=> $request['deskripsi'],
            'link_video'=>$request['link_video'],
            'editby'=>$name,
        ];
        $creative->update($up);
            alert('Data Berhasil Di Edit');
            return redirect('/ourproduct_page_admin')->with('data berhasil ditambah');
        }

}
