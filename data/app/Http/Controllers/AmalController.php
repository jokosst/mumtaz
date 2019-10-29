<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Storage;
use App\Amal;
use App\Guru;
use App\Siswa;
use App\RelasiGuru;

class AmalController extends Controller
{
    public function data(){
            $data = Amal::all();
            $data_guru = Guru::all();
             $data_siswa = Siswa::all();
            return view('amal',['lihat' =>$data,'lihat_guru'=>$data_guru,'lihat_siswa'=>$data_siswa]);

        }
        public function create(Request $request){
		$tambah = new Amal; //tambah data dengan eloquent
        $tambah->kelas = $request->kelas;
        $tambah->amal = $request->amal;
        $tambah->status = "1";
        $tambah->save();
         return redirect('amal');
        }
        public function guru_murid_create(Request $request){
        $tambah = new RelasiGuru; //tambah data dengan eloquent
        $tambah->id_guru = $request->id_guru;
        $tambah->id_siswa = $request->id_siswa;
        $tambah->save();
         return redirect('amal');
        }
        public function ubah_amal(Request $request,$id){
        $tambah = Amal::find($id); //tambah data dengan eloquent
        $tambah->kelas = $request->kelas;
        $tambah->amal = $request->amal;
        $tambah->save();
         return redirect('amal')->with('msg', 'data berhasil di ubah');;
        }
        public function hapus(Request $request, $id){
        Amal::destroy($id);
            return redirect('amal')->with('msg', 'data berhasil di hapus');
        }
        public function guru_murid_hapus(Request $request, $id){
        RelasiGuru::destroy($id);
            return redirect('amal');
        }
}
