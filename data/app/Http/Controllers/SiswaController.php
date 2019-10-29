<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Storage;
use App\Siswa;
use App\Ajaran;
use App\RelasiGuru;
use App\Nilai;

class SiswaController extends Controller
{
    public function data(){
            $data = Siswa::all();
            return view('siswa',['lihat' =>$data]);

        }
        
        public function create(Request $request){
		$tambah = new Siswa; //tambah data dengan eloquent
        $tambah->nama = $request->nama;
        $tambah->nis = $request->nis;
        $tambah->jenis_kelamin = $request->jenis_kelamin;
        $tambah->alamat = $request->alamat;
        $tambah->save();
         return redirect('siswa');
        }
        public function ubah_siswa(Request $request,$id){
            $data = Siswa::find($id);
            return view('ubah_siswa',['lihat' =>$data]);

        }
        public function siswa_update(Request $request,$id){
        $tambah = Siswa::find($id);  
        $tambah->nama = $request->nama;
        $tambah->nis = $request->nis;
        $tambah->jenis_kelamin = $request->jenis_kelamin;
        $tambah->alamat = $request->alamat;
        $tambah->save();
            return redirect('siswa')->with('msg', 'data berhasil di ubah');

        }
        public function hapus(Request $request, $id){
        Siswa::destroy($id);
        DB::table('relasi_guru')->where('id_siswa', $id)->delete();
        DB::table('nilai')->where('id_siswa', $id)->delete();
            return redirect('siswa')->with('msg', 'data nilai dan kelompok guru berhasil di hapus Permanen');
        }
}
