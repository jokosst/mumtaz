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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>SISWA</h2>
                             <ul class="header-dropdown m-r-5">
                                <li>
                                    <a href="tambah_siswa" class="btn btn-primary waves-effect">
                                         +TAMBAH
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
     <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIS</th>
                                        <th>Jenis Kelamin</th>
                                        <th>ALamat</th>                                        
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIS</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>                                        
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
                                        <td>{{$data->jenis_kelamin}}</td>
                                        <td>{{$data->alamat}}</td>
                                        <td>
         <div class="btn-group btn-group-sm" style="float: none;">
    <a href="ubah_siswa/{{$data->id}}" class="btn btn-success btn-sm" data-toggle="tooltip"
        data-placement="bottom" title="Detail"><i class="material-icons">find_in_page</i></a>
    <a href="hapus_siswa/{{$data->id}}" class="btn btn-danger btn-sm" data-toggle="tooltip"
        data-placement="bottom" title="Hapus Permanen" onclick="return confirmSubmit()"><i class="material-icons">delete_forever</i></a>
                    </div>
                                        </td>
                                    </tr>
                                    @endforeach
                        <script>
                  function confirmSubmit()
                    {
                        var agree=confirm("WARNING!!! \n Apakah anda yakin akan menghapus Data ini? \n ini akan mengakibatkan mengahapus semua data nilai siswa!!!");
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
                <!-- #END# Task Info -->
               
            </div>
        </div>
    </section>

   
    @stop