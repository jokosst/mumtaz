@extends('layouts.index')
@section('content')
   <section class="content">
        <div class="container-fluid">
           

            <div class="row clearfix">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>PILIH TAHUN AJARAN DAN SEMESTER</h2>
                             <ul class="header-dropdown m-r-5">
                                <li>
                                    <!-- <a href="tambah_siswa" class="btn btn-primary waves-effect">
                                         +TAMBAH
                                    </a> -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                <div class="row clearfix">
                  <form id="form_validation" method="post" action="{{URL::to('pilih_siswa')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
                        <div class="col-md-4">
                        <div class="form-group form-float">
                        <div class="form-line">
                    <select name="id_ajaran" class="form-control show-tick">
                                 @foreach($list_ajaran as $data)
                <option value="{{$data->id}}">{{$data->tahun}} ({{$data->sesi}})</option>
                                        @endforeach
                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                                    <div class="form-group">
                    <button class="btn btn-primary waves-effect" type="submit">CARI</button>
                                    </div>
                                </div>
                            </form>
                    </div>
            <div class="row clearfix">
                                
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>LAPORAN AMAL YAUMI <u>Th. {{$lihat_ajaran->tahun}} ({{$lihat_ajaran->sesi}})</u></h2>
                             <ul class="header-dropdown m-r-5">
                                <li>
                                    <!-- <a href="tambah_siswa" class="btn btn-primary waves-effect">
                                         +TAMBAH
                                    </a> -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
     <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NAMA GURU</th>
                                        <th>Lihat</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>NAMA GURU</th>
                                        <th>Lihat</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                     <?php  $count = 1; ?>
                                 @foreach($lihat_guru as $data)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>
         <div class="btn-group btn-group-sm" style="float: none;">
    <a href="{{URL::to('lihat_siswa')}}/{{$lihat_ajaran->id}}/{{$data->id}}" class="btn btn-success btn-sm" data-toggle="tooltip"
        data-placement="bottom" title="Detail"><i class="material-icons">find_in_page</i></a>
                    </div>
                                        </td>
                                    </tr>
                                    @endforeach
                       
                                </tbody>
                             </table>
                           
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>ABSEN MURID / KELOMPOK <u>{{$lihat_id_guru->nama}}</u></h2>
                             <ul class="header-dropdown m-r-5">
                                <li>
                                    <!-- <a href="tambah_siswa" class="btn btn-primary waves-effect">
                                         +TAMBAH
                                    </a> -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
     <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NAMA MURID</th>
                                        <th>NIS</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>NAMA MURID</th>
                                        <th>NIS</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $count = 1; ?>
                                     @foreach($relasi as $data)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->nis}}</td>
                                        <td>
        
    <a href="#" class="btn btn-warning waves-effect" data-toggle="modal" data-target="#modalnilai{{$data->id}}" title="Lihat Nilai">Nilai</a>
    <a href="cetak_rapot/{{$lihat_ajaran->id}}/{{$data->id}}" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="bottom" title="Cetak Rapot">Rapot</a>
                   
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                     
                             </table>
                           
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
               
            </div>
        </div>
    </section>
@foreach($lihat as $data)
       <div class="modal fade" id="modalnilai{{$data->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
         <h4 class="modal-title" id="defaultModalLabel">{{$data->nama}}</h4>
                        </div>
                        
                        <div class="modal-body table-responsive">
            <table class="table table-bordered table-striped table-hover">
                                
                                    <?php
                                       $id_ajaran = $lihat_ajaran->id;
                                       $id_siswa = $data->id; 
                $data_nilai = DB::table('nilai')
                        ->where('id_ajaran',$id_ajaran)
                        ->where('id_siswa',$id_siswa)
                        ->select('amal_tarbawi.amal','amal_tarbawi.id as id_amal')
                        ->join('amal_tarbawi','amal_tarbawi.id','=','nilai.id_amal')
                        ->groupby('nilai.id_amal')
                        ->get();
                   $jumlah_pekan =  DB::table('nilai') 
                        ->where('id_ajaran',$id_ajaran)
                        ->where('id_siswa',$id_siswa)
                        ->selectRaw('count(nilai.id_amal) as total')
                        ->join('amal_tarbawi','amal_tarbawi.id','=','nilai.id_amal')
                        ->groupby('nilai.id_amal')
                        ->first();
                        if($jumlah_pekan){
                                        ?>
                        <thead style="background-color: #e2d451;">
                                   <tr>
                                        <th rowspan="2">Amal Tarbawi</th>
                                        <th colspan="{{$jumlah_pekan->total * 2}}">Pekan</th>
                                    </tr>
                                     <tr>
                                        <?php 
                                        $karakter = $jumlah_pekan->total;
                                        for ($i = 1; $i <= $karakter; $i++) {      

                                        echo"<th>",$i,"<th>";
                                        }

                                        ?>
                                    </tr>
                                </thead>
                                    <tbody>

                                        
                                         <tr>
                                            @foreach($data_nilai as $data_nilai)
                                         <td>{{$data_nilai->amal}}</td>
                                        <?php 
                        $data_score = DB::table('nilai')
                        ->where('id_ajaran',$id_ajaran)
                        ->where('id_siswa',$id_siswa)
                        ->where('id_amal',$data_nilai->id_amal)
                        ->select('nilai.score')
                        ->get();
                        foreach($data_score as $data){
                             echo"<td>",$data->score,"<td>";
                        }
                                       

                                        ?>

                                     </tr>
                                     @endforeach
                                    </tbody>
                                <?php }else{
                                    echo "<h1>Data Kosong</h1>";    
                                }

                                ?>
                            </table>
                                                             
                                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Tutup</button>
                        </div>
                    
                    </div>
                </div>
            </div>      
  @endforeach
   
    @stop