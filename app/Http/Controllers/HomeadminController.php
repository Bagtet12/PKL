<?php

namespace App\Http\Controllers;

use App\about;
use App\Product;
use App\Team;
use App\User;
use File;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class HomeadminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function indexadmin()
    {   
        $abouts=about::where('id','1')->first();
        $our_product = \App\Product::all();
        $team = \App\Team::all();

        return view('page/admin/home/homeadmin', compact('abouts','our_product','team'));
    }
    public function akun()
    {   
        $user = User::where('id', FacadesAuth::user()->id)->first();
        $users = \App\User::all();

        return view('page/admin/akun/akunprofil', compact('user','users'));
    }
    public function createakun(Request $request)
    {   
        $sandi=$request->password;
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'sandi' => $sandi,
        ]);
        // Alert::success('pesan yang ingin disampaikan', 'Judul Pesan');
        
        alert('berhasil');
        return redirect('/akun');
    }
    public function akunupdate(Request $request)
    {
        // $this->validate($request, [
        //     'password'  =>'min:3', 'confirmed',
        // ]);

    	$user = User::where('id', facadesAuth::user()->id)->first();
        // if($request->oldpassword == $request->password){

        // }
    	if(!empty($request->password || $request->password_confirmation ||$request->oldpassword ))
    	{
            if (!empty($request->oldpassword) && empty($request->password)){
                alert('pastikan new password terisi','Gagal');
                return redirect('/akun');
            }
            if ($request->oldpassword==$user->sandi){
                if($request->password==$request->password_confirmation){
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->password = Hash::make($request->password);
                    $user->sandi = $request->password;
                    $user->update();
                    alert('berhasil update semua');
                    return redirect('/akun');
                }else{
                    alert('pastikan confirmasi password sama persis','Gagal');
                    return redirect('/akun');
                }
            }else{
                alert('password lama salah');
                return redirect('/akun');
            }
    		
    	}else{
            $user->name = $request->name;
    	    $user->email = $request->email;
            $user->update();
            alert('berhasil update identitas');
            return redirect('/akun');
        }
    	// Alert::success('pesan yang ingin disampaikan', 'Judul Pesan');
    	
    	
    }
    public function deleteakun($id){
        $user=User::find($id);
        $user->delete();
        alert('berhasil');
    	return redirect('/akun');
    }
    public function editakun($id)
    {   
        $user=User::where('id',$id)->first();
        return view('page/admin/akun/akunedit',compact('user'));
        
    }
    public function saveupdate(Request $request, $id)
    {
    	$user = User::where('id',$id)->first();
        // if($request->oldpassword == $request->password){
        $userid=$user->id;
        // }
    	if(!empty($request->password || $request->password_confirmation ||$request->oldpassword ))
    	{
            if (!empty($request->oldpassword) && empty($request->password)){
                alert('pastikan new password terisi','Gagal');
                return redirect('/akun');
            }
            if ($request->oldpassword==$user->sandi){
                if($request->password==$request->password_confirmation){
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->password = Hash::make($request->password);
                    $user->sandi = $request->password;
                    $user->update();
                    alert('berhasil update semua');
                    return redirect('/akun');
                }else{
                    alert('pastikan confirmasi password sama persis','Gagal');
                    return redirect('/akun');
                }
            }else{
                alert('password lama salah');
                return redirect('/akun');
            }
    		
    	}else{
            $user->name = $request->name;
    	    $user->email = $request->email;
            $user->update();
            alert('berhasil update identitas');
            return redirect('/akun');
        }
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
    	alert('berhasil');
        return redirect('homeadmin#about');
        
    }

    public function productedit($id)
    {   
        $products=Product::where('id',$id)->first();
        return view('page/admin/home/productedit',compact('products'));
    }
    public function saveedit(Request $request,$id)
    {   
        $products=Product::findorfail($id);
        if ($request->gambar==null){
            $awal=$products->gambar;
        }else{
            
            $file = $request->file('gambar');
            $awal=time()."_"."$request->nama"."_".$file->getClientOriginalName();
            $tujuan='gambar/product';
            $file->move($tujuan,$awal);            
            File::delete('gambar/product/'.$products->gambar);

            
        }

        $up=[
            'gambar'=>$awal,
            'nama_product'=> $request['nama_product'],
            'deskripsi'=> $request['deskripsi'],
        ];
        $products->update($up);
        
        alert('berhasil');
        return redirect('/homeadmin#services')->with('data berhasil ditambah');
    }
    public function productdelete($id){
        $products=Product::find($id);
        $products->delete();
        File::delete('gambar/product/'.$products->gambar);
        
        alert('berhasil');
        return redirect('/homeadmin#services')->with('data berhasil dihapus');

    }
    public function create(Request $request){
        // \App\Product::create($request->all());
        $this->validate($request, [
			'gambar' => 'required|file|mimes:jpeg,png,jpg,JPG|max:20480',
            'nama_product' => 'required',
			'deskripsi' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('gambar');
 
		$nama_file = time()."_"."$request->nama"."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'gambar/product';
		$file->move($tujuan_upload,$nama_file);
 
		Product::create([
			'gambar' => $nama_file,
            'nama_product' => $request->nama_product,
			'deskripsi' => $request->deskripsi,
		]);
 
		
        alert('berhasil');
        return redirect('/homeadmin#services')->with('data berhasil ditambah');
    }
    public function teamedit($id)
    {   
        $team=Team::findorfail($id);
        return view('page/admin/home/teamedit',compact('team'));
    }
    public function teamsave(Request $request,$id)
    {   
        $team=Team::findorfail($id);
        if ($request->gambar==null){
            $awal=$team->gambar;
        }else{
            $file = $request->file('gambar');
            $awal=time()."_"."$request->nama"."_".$file->getClientOriginalName();
            $tujuan='gambar/team';
            $file->move($tujuan,$awal);
            File::delete('gambar/team/'.$team->gambar);

            
        }

        $up=[
            'gambar'=>$awal,
            'nama'=> $request['nama'],
            'role'=> $request['role'],
        ];
        $team->update($up);
        
        alert('berhasil');
        return redirect('/homeadmin#team')->with('data berhasil ditambah');
    }
    public function producttambah()
    {   
        return view('page/admin/home/producttambah');
    }
    public function teamtambah()
    {   
        return view('page/admin/home/teamtambah');
    }
    public function create_team(Request $request){
        // \App\Team::create($request->all());
        // return redirect('/homeadmin#team')->with('data berhasil ditambah');
        $this->validate($request, [
			'gambar' => 'required|file|mimes:jpeg,png,jpg|max:20480',
            'nama' => 'required',
			'role' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('gambar');
 
		$nama_file = time()."_"."$request->nama"."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'gambar/team';
		$file->move($tujuan_upload,$nama_file);
 
		Team::create([
			'gambar' => $nama_file,
            'nama' => $request->nama,
			'role' => $request->role,
		]);
 
		
        alert('berhasil');
        return redirect('/homeadmin#team')->with('data berhasil ditambah');
    }
    public function teamdelete($id){
        $team=Team::find($id);
        $team->delete();
        File::delete('gambar/team/'.$team->gambar);
        
        alert('berhasil');
        return redirect('/homeadmin#team')->with('data berhasil dihapus');

    }
    
    
}

