@extends('layouts.index_app')
@section('content')
   <section class="content">
        <!-- <div class="container-fluid"> -->
          @if(Session::has('msg'))
                            <div class="alert bg-teal alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               {{Session::get('msg')}} .
                            </div> 

            <div class="row clearfix">
                 
                            @endif
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>DATA NILAI Th.{{$lihat_ajaran->tahun}} ({{$lihat_ajaran->sesi}})</h2>
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
    <a href="{{URL::to('mobile/lihat_nilai')}}/{{$lihat_ajaran->id}}/{{$data->id}}" class="btn bg-teal waves-effect" data-toggle="tooltip"
        data-placement="bottom" title="Lihat Nilai"><i class="material-icons">find_in_page</i></a>
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

   
    @stop