<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Storage;
use App\Siswa;
use App\Ajaran;
use App\Amal;
use App\Nilai;
use App\Guru;
use App\Admin;

class MobileController extends Controller
{
	public function data(){
            $data_ajaran = Ajaran::orderBy('id','DESC')->get();
            $tentang =   DB::table('tentang')->where('id', 1)->first();
            return view('mobile.index',['lihat_ajaran'=>$data_ajaran,'lihat_tentang'=>$tentang]);

        }
    public function pilih_siswa(){
            // $data = Siswa::all();
            $id_guru = \Auth::user()->id_guru;
            // dd($id_guru);
            $data = DB::table('relasi_guru')->where('id_guru',$id_guru)
                            ->select('siswa.nama','siswa.nis','siswa.id')
                            ->join('guru','guru.id','=','relasi_guru.id_guru')
                            ->join('siswa','siswa.id','=','relasi_guru.id_siswa')
                            ->get();
            $data_ajaran = Ajaran::latest('id')->first();
            return view('mobile.pilih_siswa',['lihat' =>$data,'lihat_ajaran'=>$data_ajaran]);

        }
    public function input_nilai(Request $request, $idAjaran, $idSiswa, $Kelas){
            $data = Amal::where('kelas',$Kelas)->get();
            $data_ajaran = Ajaran::where('id',$idAjaran)->first();
            // dd($idSiswa);
            return view('mobile.input_nilai',['lihat' =>$data,'lihat_ajaran'=>$data_ajaran,'lihat_id_siswa'=>$idSiswa]);

        }
        public function create(Request $request){
        $size = count($request->id_amal);
   for ($i = 0; $i < $size; $i++)
    {
		$tambah = new Nilai; //tambah data dengan eloquent
		$tambah->id_siswa = $request->id_siswa;
        $tambah->id_amal = $request->id_amal[$i];
        $tambah->score = $request->score[$i];
        $tambah->id_ajaran = $request->id_ajaran;
        $tambah->date = date('Y-m-d');
        $tambah->save();
    }
		
         return redirect('mobile/pilih_siswa')->with('msg', 'Data berhasil di Input');;
        }
        public function data_nilai(){
             $id_guru = \Auth::user()->id_guru;
            // dd($id_guru);
            $data = DB::table('relasi_guru')->where('id_guru',$id_guru)
                            ->select('siswa.nama','siswa.nis','siswa.id')
                            ->join('guru','guru.id','=','relasi_guru.id_guru')
                            ->join('siswa','siswa.id','=','relasi_guru.id_siswa')
                            ->get();
            $data_ajaran = Ajaran::latest('id')->first();
            return view('mobile.data_nilai',['lihat' =>$data,'lihat_ajaran'=>$data_ajaran]);

        }
        public function lihat_nilai(Request $request, $idAjaran, $idSiswa){
            $data = Amal::all();
            $data_ajaran = Ajaran::where('id',$idAjaran)->first();
            $data_siswa = Siswa::where('id',$idSiswa)->first();
            $jumlah_pekan =  DB::table('nilai') 
                        ->where('id_ajaran',$idAjaran)
                        ->where('id_siswa',$idSiswa)
                        ->selectRaw('count(nilai.id_amal) as total')
                        ->join('amal_tarbawi','amal_tarbawi.id','=','nilai.id_amal')
                        ->groupby('nilai.id_amal')
                        ->first();
             $data_nilai = DB::table('nilai')
                        ->where('id_ajaran',$idAjaran)
                        ->where('id_siswa',$idSiswa)
                        ->select('amal_tarbawi.amal','amal_tarbawi.id as id_amal')
                        ->join('amal_tarbawi','amal_tarbawi.id','=','nilai.id_amal')
                        ->groupby('nilai.id_amal')
                        ->get();           
            // dd($idSiswa);
            return view('mobile.lihat_nilai',['lihat' =>$data,'lihat_ajaran'=>$data_ajaran,'lihat_siswa'=>$data_siswa,'lihat_pekan'=>$jumlah_pekan,'lihat_nilai'=>$data_nilai]);

        }
         public function profile(){
             $id_guru = \Auth::user()->id_guru;
             $data = Guru::find($id_guru);
             $admin = Admin::where('id_guru',$id_guru)->first();
        return view('mobile.profile',['lihat' =>$data,'data_pass'=>$admin]);
         }
         public function profile_update(Request $request,$id){
        $tambah = Guru::find($id);  
        $tambah->nama = $request->nama;
        $tambah->pendidikan = $request->pendidikan;
        $tambah->no_hp = $request->no_hp;
        $tambah->email = $request->email;
        $tambah->jenis_kelamin = $request->jenis_kelamin;
        $tambah->alamat = $request->alamat;
        $tambah->save();
            return redirect('mobile/profile')->with('msg', 'data berhasil di ubah');

        }
        public function pass_update(Request $request,$id){
        $tambah = Admin::find($id); 
        $tambah->username= $request->username;
        $tambah->password = bcrypt($request->password);
        $tambah->save();
     return redirect('mobile/profile')->with('msg', 'Username dan Password Berhasil di ubah');        
        
        }
}
