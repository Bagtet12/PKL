<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\Partner;
use App\User;
use Illuminate\Http\Request;
use File;
use Alert;
use Illuminate\Pagination;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\If_;
use Product as GlobalProduct;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class portfolio_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function portofolio_index()
    {
        $portfolio=\App\Portfolio::all();
        $partner=\App\Partner::all();
        return view('page/admin/portofolio/portofolio_admin',compact('portfolio','partner'));
    }
    public function portfoliotambah()
        {   
            return view('page/admin/portofolio/portofoliotambah');
        }
        public function portfolio_edit($id)
        {   
            $portfolio=Portfolio::where('id',$id)->first();
            return view('page/admin/portofolio/portofolioedit',compact('portfolio'));
        }
        public function portfoliodelete($id){
            $portfolio=Portfolio::find($id);
            $portfolio->delete();
            File::delete('gambar/portfolio/'.$portfolio->gambar);
            alert('Data Berhasil Di Hapus');
            return redirect('/portfolio_admin')->with('data berhasil dihapus');
        }
        public function create_portfolio(Request $request){
            $this->validate($request, [
                'gambar' => 'required|file|mimes:jpeg,png,jpg|max:2048000',
                'judul' => 'required',
                'deskripsi' => 'required',
                
            ]);
     
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('gambar');
     
            $nama_file = time()."_"."$request->nama"."_".$file->getClientOriginalName();
     
                      // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'gambar/portfolio';
            $file->move($tujuan_upload,$nama_file);
            if(empty($request->link_video)){
                $link_video="1";
            }
            else{
                $link_video=$request->link;
            }
            $nama=User::where('id', FacadesAuth::user()->id)->first();
            $name=$nama->name;
            Portfolio::create([
                'gambar' => $nama_file,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'link'=>$link_video,
                'createby'=>$name,
            ]);
     
            alert('Data Berhasil Di Tambah');
            return redirect('/portfolio_admin')->with('data berhasil ditambah');
        }
        public function saveportfolio(Request $request,$id)
        { 
              
            $request->validate([
                'gambar'=>'image|mimes:jpeg,jpg,png|max:24800'
            ]);
            
            $portfolio=Portfolio::findorfail($id);
        if ($request->gambar==null){
            $awal=$portfolio->gambar;
        }else{
            
            $file = $request->file('gambar');
            $awal=time()."_"."$request->nama"."_".$file->getClientOriginalName();
            $tujuan='gambar/portfolio';
            $file->move($tujuan,$awal);
            
        }
        $nama=User::where('id', FacadesAuth::user()->id)->first();
        $name=$nama->name;
        $up=[
            'gambar'=>$awal,
            'judul'=> $request['judul'],
            'deskripsi'=> $request['deskripsi'],
            'link'=>$request['link'],
            'editby'=>$name,
        ];
        $portfolio->update($up);
            alert('Data Berhasil Di Edit');
            return redirect('/portfolio_admin')->with('data berhasil ditambah');
        }

        public function partnertambah()
        {   
            return view('page/admin/portofolio/partnertambah');
        }
        public function partner_edit($id)
        {   
            $partner=Partner::where('id',$id)->first();
            return view('page/admin/portofolio/partneredit',compact('partner'));
        }
        public function partnerdelete($id){
            $partner=Partner::find($id);
            $partner->delete();
            File::delete('gambar/partner/'.$partner->gambar);
            alert('Data Berhasil Di Hapus');
            return redirect('/portfolio_admin')->with('data berhasil dihapus');
        }
        public function create_partner(Request $request){
            $this->validate($request, [
                'gambar' => 'required|file|mimes:jpeg,png,jpg|max:2048000',
                'judul' => 'required',
                
            ]);
     
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('gambar');
     
            $nama_file = time()."_"."$request->nama"."_".$file->getClientOriginalName();
     
                      // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'gambar/partner';
            $file->move($tujuan_upload,$nama_file);
            $nama=User::where('id', FacadesAuth::user()->id)->first();
            $name=$nama->name;
            Partner::create([
                'gambar' => $nama_file,
                'judul' => $request->judul,
                'createby'=>$name,
            ]);
     
            alert('Data Berhasil Di Tambah');
            return redirect('/portfolio_admin')->with('data berhasil ditambah');
        }
        public function savepartner(Request $request,$id)
        {   
            $request->validate([
                'gambar'=>'image|mimes:jpeg,jpg,png|max:24800'
            ]);
            
            $partner=Partner::findorfail($id);
        if ($request->gambar==null){
            $awal=$partner->gambar;
        }else{
            
            $file = $request->file('gambar');
            $awal=time()."_"."$request->nama"."_".$file->getClientOriginalName();
            $tujuan='gambar/partner';
            $file->move($tujuan,$awal);
            
        }
        $nama=User::where('id', FacadesAuth::user()->id)->first();
        $name=$nama->name;
        $up=[
            'gambar'=>$awal,
            'judul'=> $request['judul'],
            'editby'=>$name,
        ];
        $partner->update($up);
            alert('Data Berhasil Di Edit');
            return redirect('/portfolio_admin')->with('data berhasil ditambah');
        }
}
