@extends('layouts.index_app')
@section('content')
   <section class="content">
        <!-- <div class="container-fluid"> -->

            <div class="row clearfix">
                 
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>DATA NILAI Th.{{$lihat_ajaran->tahun}} ({{$lihat_ajaran->sesi}})</h2>
                            <h4>{{$lihat_siswa->nama}} ({{$lihat_siswa->nis}})</h4>
                             <ul class="header-dropdown m-r-5">
                                <li>
                                    <!-- <a href="tambah_siswa" class="btn btn-primary waves-effect">
                                         +TAMBAH
                                    </a> -->
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
     <table class="table table-bordered table-striped table-hover">
                                
                                    @if(empty($lihat_pekan))
                                    <tr><h1>Data Kosong</h1></tr>
                                    
                                @else
                                <thead>
                                <tr style="background-color: #e2d451;">
                                        <th rowspan="2">Amal Tarbawi</th>
                                        <th colspan="{{$lihat_pekan->total * 2}}">Pekan</th>
                                    </tr>
                                     <tr style="background-color: #e2d451;">
                                
                                        <?php 
                                        $karakter = $lihat_pekan->total;
                                        for ($i = 1; $i <= $karakter; $i++) {      

                                        echo"<th>",$i,"<th>";
                                        }

                                        ?>
                                    </tr>

                                </thead>
                                <tbody>
                                     <tr>
                                         @foreach($lihat_nilai as $data_nilai)
                                         <td>{{$data_nilai->amal}}</td>
                                         <?php
                            $id_ajaran = $lihat_ajaran->id;
                            $id_siswa = $lihat_siswa->id;  
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
                                @endif
                             </table>
                           
                        </div>
                    </div>
                </div>
                
                <!-- #END# Task Info -->
               
            </div>
        <!-- </div> -->
    </section>

   
    @stop