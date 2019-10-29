@extends('layouts.index_app')
@section('content')
   <section class="content">
        <!-- <div class="container-fluid"> -->
          @if(Session::has('msg'))
                            <div class="alert bg-teal alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               {{Session::get('msg')}} .
                            </div> 
@endif
            <div class="row clearfix">
                 
                            
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>DAFTAR MURID Th.{{$lihat_ajaran->tahun}} ({{$lihat_ajaran->sesi}})</h2>
                             <ul class="header-dropdown m-r-5">
                                <li>
                                    <!-- <a href="tambah_siswa" class="btn btn-primary waves-effect">
                                         +TAMBAH
                                    </a> -->
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
     <table class="table table-bordered table-striped table-hover dataTable">
                                <thead>
                                    <tr style="background-color: #e2d451;">
                                        <th>No</th>
                                        <th>NAMA</th>
                                        <th>NIS</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr style="background-color: #e2d451;">
                                        <th>No</th>
                                        <th>NAMA</th>
                                        <th>NIS</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                     <?php  $count = 1; ?>
                                 @foreach($lihat as $data)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->nis}}</td>
                                        <td>
     <a href="#" data-toggle="modal" data-target="#defaultModal{{$data->id}}" class="btn bg-indigo waves-effect" data-toggle="tooltip"
        data-placement="bottom" title="Input Nilai"><i class="material-icons">chrome_reader_mode</i></a>
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
        <!-- </div> -->
    </section>
 @foreach($lihat as $data)
   <!-- Default Size modal -->
            <div class="modal fade" id="defaultModal{{$data->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document" style="top: 30%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel"><center>KELAS {{$data->nama}}</center></h4>
                        </div>
                        
                        <div class="modal-body">
                    <a href="input_nilai/{{$lihat_ajaran->id}}/{{$data->id}}/7">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<div class="card" style="background-color: #ffeb3be0">
<center><img src="{{ asset('assets/images/blackboard.png')}}" width="50" style="margin-top: 7px;">
<p style="margin-top: 5px;"><b>7</b></p>
       </center>
                        
                    </div>
                </div>
            </a>  
            <a href="input_nilai/{{$lihat_ajaran->id}}/{{$data->id}}/8">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<div class="card" style="background-color: #8785eaf7">
<center><img src="{{ asset('assets/images/blackboard.png')}}" width="50" style="margin-top: 7px;">
<p style="margin-top: 5px;"><b>8</b></p>
       </center>
                        
                    </div>
                </div>
            </a>
            <a href="input_nilai/{{$lihat_ajaran->id}}/{{$data->id}}/9">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<div class="card" style="background-color: #ea8a85f7">
<center><img src="{{ asset('assets/images/blackboard.png')}}" width="50" style="margin-top: 7px;">
<p style="margin-top: 5px;"><b>9</b></p>
       </center>
                        
                    </div>
                </div>
            </a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">Tutup</button>
                        </div>
                    
                    </div>
                </div>
            </div>
            @endforeach
    @stop