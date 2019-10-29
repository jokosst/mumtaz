<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Storage;
use App\Nilai;
use App\Siswa;
use App\Guru;
use App\Ajaran;

class NilaiController extends Controller
{
    public function data(){
            $data = Guru::all();
            $data_siswa = Siswa::all();
            $data_ajaran = Ajaran::orderBy('id','DESC')->get();
            return view('nilai',['lihat' =>$data,'lihat_siswa' =>$data_siswa,'lihat_ajaran'=>$data_ajaran]);

        }
        public function pilih_siswa(Request $request){
        	$data_guru = Guru::all();
            $data_siswa = Siswa::all();
            $id_ajaran = $request->id_ajaran;
            $data_ajaran = Ajaran::where('id',$id_ajaran)->first();
            $pilihan_ajaran = Ajaran::orderBy('id','DESC')->get();
            return view('pilih_siswa',['lihat_guru' =>$data_guru,'lihat_siswa' =>$data_siswa,'lihat_ajaran'=>$data_ajaran,'list_ajaran'=>$pilihan_ajaran]);

        }
        public function lihat_siswa(Request $request,$idAjaran,$idGuru){
$data_relasi = DB::table('relasi_guru')->where('id_guru',$idGuru)
                            ->select('siswa.nama','siswa.nis','siswa.id')
                            ->join('guru','guru.id','=','relasi_guru.id_guru')
                            ->join('siswa','siswa.id','=','relasi_guru.id_siswa')
                            ->get();
            $data_nilai = Nilai::where('id_ajaran',$idAjaran)
                        ->select('amal_tarbawi.amal','nilai.score')
                        ->join('amal_tarbawi','amal_tarbawi.id','=','nilai.id_amal')
                        // ->groupBy('pekan')
                        ->get();  
      
        	$data_guru = Guru::all();
            $data_siswa = Siswa::all();
            $id_ajaran = $request->id_ajaran;
            $data_ajaran = Ajaran::where('id',$idAjaran)->first();
            $data_id_guru = Guru::where('id',$idGuru)->first();
            $pilihan_ajaran = Ajaran::orderBy('id','DESC')->get();
            return view('lihat_siswa',[
                'lihat_guru' =>$data_guru,
                'lihat' =>$data_siswa,
                'lihat_ajaran'=>$data_ajaran,
                'list_ajaran'=>$pilihan_ajaran,
                'relasi'=>$data_relasi,
                'lihat_id_guru'=>$data_id_guru,
                'lihat_nilai'=>$data_nilai
            ]);

        }

}
