<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\Partner;
use Illuminate\Http\Request;
use File;
use Illuminate\Pagination;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\If_;
use Product as GlobalProduct;

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
            return redirect('/portfolio_admin')->with('data berhasil dihapus');
        }
        public function create_portfolio(Request $request){
            $this->validate($request, [
                'gambar' => 'required|file|mimes:jpeg,png,jpg|max:2048000',
                'judul' => 'required',
                'deskripsi' => 'required',
                'link' => 'required'
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
                $link_video=$request->link_video;
            }
            Portfolio::create([
                'gambar' => $nama_file,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'link'=>$request->link,
            ]);
     
            
            return redirect('/portfolio_admin')->with('data berhasil ditambah');
        }
        public function saveportfolio(Request $request,$id)
        {   
            
            $portfolio=Portfolio::findorfail($id);
        if ($request->gambar==null){
            $awal=$portfolio->gambar;
        }else{
            
            $file = $request->file('gambar');
            $awal=time()."_"."$request->nama"."_".$file->getClientOriginalName();
            $tujuan='gambar/portfolio';
            $file->move($tujuan,$awal);
            
        }

        $up=[
            'gambar'=>$awal,
            'judul'=> $request['judul'],
            'deskripsi'=> $request['deskripsi'],
            'link'=>$request['link'],
        ];
        $portfolio->update($up);
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
            Partner::create([
                'gambar' => $nama_file,
                'judul' => $request->judul,
            ]);
     
            
            return redirect('/portfolio_admin')->with('data berhasil ditambah');
        }
        public function savepartner(Request $request,$id)
        {   
            
            $partner=Partner::findorfail($id);
        if ($request->gambar==null){
            $awal=$partner->gambar;
        }else{
            
            $file = $request->file('gambar');
            $awal=time()."_"."$request->nama"."_".$file->getClientOriginalName();
            $tujuan='gambar/partner';
            $file->move($tujuan,$awal);
            
        }

        $up=[
            'gambar'=>$awal,
            'judul'=> $request['judul'],
            
        ];
        $partner->update($up);
            return redirect('/portfolio_admin')->with('data berhasil ditambah');
        }
}
