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
                            <h2>GURU</h2>
                             <ul class="header-dropdown m-r-5">
                                <li>
                                    <a href="tambah_guru" class="btn btn-primary waves-effect">
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
                                        <th>Pendidikan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No HP</th>
                                        <th>Email</th>
                                        <th>Alamat</th>                                        
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Pendidikan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No HP</th>
                                        <th>Email</th>
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
                                        <td>{{$data->pendidikan}}</td>
                                        <td>{{$data->jenis_kelamin}}</td>
                                        <td>{{$data->no_hp}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->alamat}}</td>
                                        <td>
    <a href="#" class="btn btn-success waves-effect" data-toggle="modal" data-target="#defaultModal{{$data->id}}" title="Ubah Password"><i class="material-icons">https</i></a>
    <a href="ubah_guru/{{$data->id}}" class="btn btn-warning waves-effect" data-toggle="tooltip"
        data-placement="bottom" title="Ubah Data"><i class="material-icons">create</i></a>
    <a href="hapus_guru/{{$data->id}}" class="btn btn-danger waves-effect" data-toggle="tooltip"
        data-placement="bottom" title="Hapus" onclick="return confirmSubmit()"><i class="material-icons">delete_forever</i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                        <script>
                  function confirmSubmit()
                    {
                        var agree=confirm("Apakah anda yakin akan menghapus Data ini?");
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
@foreach($lihat_akun as $data)
<!-- Default Size -->
            <div class="modal fade" id="defaultModal{{$data->id_guru}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Ubah Password {{$data->nama}}</h4>
                        </div>
        <form id="form_validation" method="post" action="ubah_pass_guru/{{$data->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="modal-body">
         <div class="form-group form-float">
    <div class="form-line">
         <input type="text" class="form-control" name="username" value="{{$data->username}}">
        <label class="form-label">Username</label>
    </div>
 </div>
      <div class="form-group form-float">
    <div class="form-line">
         <input type="text" class="form-control" name="password" required>
        <label class="form-label">Password</label>
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