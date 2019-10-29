<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Storage;
use App\Guru;
use App\Admin;

class GuruController extends Controller
{
    public function data(){
            $data = Guru::all();
            $data_akun = Admin::all();
            return view('guru',['lihat' =>$data,'lihat_akun'=>$data_akun]);

        }
        public function create(Request $request){
		$tambah = new Guru; //tambah data dengan eloquent
        $tambah->nama = $request->nama;
        $tambah->pendidikan = $request->pendidikan;
        $tambah->no_hp = $request->no_hp;
        $tambah->email = $request->email;
        $tambah->jenis_kelamin = $request->jenis_kelamin;
        $tambah->alamat = $request->alamat;
        $tambah->save();
$lastID = $tambah->id;
        $tambah_admin = new Admin;
        $tambah_admin->id_guru = $lastID;
        $tambah_admin->nama = $request->nama;
        $tambah_admin->username = $request->username;
        $tambah_admin->password = bcrypt($request->password);
        $tambah_admin->level = 'guru';
        $tambah_admin->save();

         return redirect('guru');
        }
        public function ubah_guru(Request $request,$id){
            $data = Guru::find($id);
            return view('ubah_guru',['lihat' =>$data]);

        }
        public function guru_update(Request $request,$id){
        $tambah = Guru::find($id);  
        $tambah->nama = $request->nama;
        $tambah->pendidikan = $request->pendidikan;
        $tambah->no_hp = $request->no_hp;
        $tambah->email = $request->email;
        $tambah->jenis_kelamin = $request->jenis_kelamin;
        $tambah->alamat = $request->alamat;
        $tambah->save();
            return redirect('guru')->with('msg', 'data berhasil di ubah');

        }
        public function ubah_pass_guru(Request $request,$id){
        $tambah = Admin::find($id); 
        $tambah->username= $request->username;
        $tambah->password = bcrypt($request->password);
        $tambah->save();
     return redirect('guru')->with('msg', 'Username dan Password Berhasil di ubah');        
        
        }
         public function hapus(Request $request, $id){
        Guru::destroy($id);
            return redirect('guru')->with('msg', 'data berhasil di hapus');
        }
}
