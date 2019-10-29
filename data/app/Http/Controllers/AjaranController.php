<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Storage;
use App\Ajaran;

class AjaranController extends Controller
{
   public function data(){
            $data = Ajaran::all();
            return view('ajaran',['lihat' =>$data]);

        }
        public function create(Request $request){
		$tambah = new Ajaran; //tambah data dengan eloquent
        $tambah->tahun= $request->tahun;
        $tambah->sesi = $request->sesi;
        $tambah->save();
         return redirect('ajaran');
        }
        public function ubah_ajaran(Request $request,$id){
        $tambah = Ajaran::find($id); 
        $tambah->tahun= $request->tahun;
        $tambah->sesi = $request->sesi;
        $tambah->save();
         return redirect('ajaran')->with('msg', 'data berhasil di ubah');;
        }
        public function hapus(Request $request, $id){
        Ajaran::destroy($id);
            return redirect('ajaran')->with('msg', 'data berhasil di hapus');
        }
}
