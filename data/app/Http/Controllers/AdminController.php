<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Storage;
use App\Admin;
use App\Tentang;

class AdminController extends Controller
{
    public function data(){
            $data = Admin::find(1);
            $tentang =   DB::table('tentang')->where('id', 1)->first();
            return view('ubah_password',['lihat' =>$data,'lihat_tentang'=>$tentang]);

        }
        public function tentang_ubah(Request $request){
        $tambah = Tentang::find(1);
        $tambah->isi= $request->isi;
        $tambah->save();
         return redirect('ubah_password')->with('msg2', ' tentang telah ubah');

        }
        public function create(Request $request){
		$tambah = new Admin; //tambah data dengan eloquent
		$tambah->nama= $request->nama;
        $tambah->username= $request->username;
        $tambah->password = bcrypt($request->password);
        $tambah->save();
         return redirect('ubah_password');
        }
        public function password_ubah(Request $request){
        	$pass = $request->password;
        	if(empty($pass)){
        		$tambah = Admin::find(1); //tambah data dengan eloquent
		$tambah->nama= $request->nama;
        $tambah->username= $request->username;
        $tambah->save();
         return redirect('ubah_password')->with('msg2', ' Nama, Username Berhasil di ubah');
        	}else{
        $tambah = Admin::find(1); //tambah data dengan eloquent
		$tambah->nama= $request->nama;
        $tambah->username= $request->username;
        $tambah->password = bcrypt($request->password);
        $tambah->save();
     return redirect('ubah_password')->with('msg', ' Nama, Username dan Password Berhasil di ubah');
        	}
		
        
        }
        public function login(Request $Request){

      	  if (\Auth::attempt(['username' => $Request->username, 'password' => $Request->password])) {
            // Authentication passed...
            return redirect()->intended('/');
        } else {
        	return back()->with('error', 'Cek Lagi username atau password anda');
        }
  		
   }

   //logout
   public function logout(Request $request)
    {
    	\Auth::logout();

    	return redirect('/');
    }
}
