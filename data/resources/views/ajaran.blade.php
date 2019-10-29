@extends('layouts.index')
@section('content')
   <section class="content">
        <div class="container-fluid">
           

            <div class="row clearfix">
                @if(Session::has('msg'))
                            <div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               {{Session::get('msg')}} .
                            </div>
                            @endif
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>AJARAN</h2>
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
                                        
                                        <th>Tahun</th>
                                        <th>Semester</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        
                                        <th>Tahun</th>
                                        <th>Semester</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                 @foreach($lihat as $data)
                                    <tr>
                                        <td>{{$data->tahun}}</td>
                                        <td>{{$data->sesi}}</td>
                                        <td>
          <div class="btn-group btn-group-sm" style="float: none;">
    <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#defaultModal{{$data->id}}" title="Ubah Data"><i class="material-icons">create</i></a>
    <a href="hapus_ajaran/{{$data->id}}" class="btn btn-danger btn-sm" data-toggle="tooltip"
        data-placement="bottom" title="Hapus" onclick="return confirmSubmit()"><i class="material-icons">delete_forever</i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                        <script>
                  function confirmSubmit()
                    {
                        var agree=confirm("WARNING!!! \n Apakah anda yakin akan menghapus Data ini? \n ini akan mengakibatkan mengahapus semua data nilai siswa yang sudah menginput ajaran tahun ini!!!");
                        if (agree)
                            return true ;
                        else
                            return false ;
                    }
                </script>
                                </tbody>
                             </table>
                           
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH AJARAN</h2>
                             <ul class="header-dropdown m-r-5">
                                <li>
                                    <!-- <a href="tambah_siswa" class="btn btn-primary waves-effect">
                                         +TAMBAH
                                    </a> -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
    <form id="form_validation" method="post" action="ajaran_create" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="form-group form-float">
    <div class="form-line">
         <input type="number" class="form-control" name="tahun" required>
        <label class="form-label">TAHUN</label>
    </div>
 </div>
<div class="form-group form-float">
    <div class="form-line">
         <input type="number" class="form-control" name="sesi" required>
        <label class="form-label">SEMESTER</label>
    </div>
 </div>
 

  <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
     </form>
                           
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
               
            </div>
        </div>
    </section>
@foreach($lihat as $data)
<!-- Default Size -->
            <div class="modal fade" id="defaultModal{{$data->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Ubah Ajaran Th. {{$data->tahun}} ({{$data->sesi}})</h4>
                        </div>
        <form id="form_validation" method="post" action="ubah_ajaran/{{$data->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
                        <div class="modal-body">
        <div class="form-group form-float">
    <div class="form-line">
         <input type="number" class="form-control" name="tahun" value="{{$data->tahun}}">
        <label class="form-label">TAHUN</label>
    </div>
 </div>
<div class="form-group form-float">
    <div class="form-line">
         <input type="number" class="form-control" name="sesi"  value="{{$data->sesi}}"d>
        <label class="form-label">SEMESTER</label>
    </div>
 </div>
                   </div>
                        <div class="modal-footer">                            
                            <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary waves-effect">Ubah</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
   @endforeach
   
    @stop