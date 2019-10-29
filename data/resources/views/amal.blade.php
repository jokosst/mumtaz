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
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>AMAL YAUMI</h2>
                             <ul class="header-dropdown m-r-5">
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#defaultModal" class="btn btn-primary waves-effect">
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
                                        <th>Kelas</th> 
                                        <th>Amal Tarbawi</th>                                        
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                       <th>No</th>
                                       <th>Kelas</th> 
                                        <th>Amal Tarbawi</th>                                        
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                     <?php  $count = 1; ?>
                                 @foreach($lihat as $data)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>Kelas {{$data->kelas}}</td>
                                        <td>{{$data->amal}}</td>
                                        <td>
         
   
    <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_amal{{$data->id}}" title="Ubah Data"><i class="material-icons">create</i></a>
    <a href="hapus_amal/{{$data->id}}" class="btn btn-danger btn-sm" data-toggle="tooltip"
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
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>MURID Dari GURU</h2>
                             <ul class="header-dropdown m-r-5">
                                <li>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
     <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>                                        
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>                                      
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                     <?php  $count = 1; ?>
                                 @foreach($lihat_guru as $data)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>
        
    <a href="#" data-toggle="modal" data-target="#modalsiswa{{$data->id}}" class="btn bg-indigo waves-effect" 
        data-placement="bottom" title="Detail Murid">Detail Murid</a>
                   
                                        </td>
                                    </tr>
                                    @endforeach
                       
                                </tbody>
                             </table>
                           
                        </div>
                    </div>
                </div>
                        
                            </div>

               
            </div>
        </div>
    </section>

<!-- Default Size -->
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">TAMBAH AMAL YAUMI</h4>
                        </div>
                        <form id="form_validation" method="post" action="amal_create" enctype="multipart/form-data">
    {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group form-float">
                            <label>KELAS</label>
                                    <select name="kelas" class="form-control show-tick">
                                        <option value="7">Kelas 7</option>
                                        <option value="8">Kelas 8</option>
                                        <option value="9">Kelas 9</option>
                                    </select>
                                </div>
    <div class="form-group form-float">
    <div class="form-line">
        <textarea name="amal" cols="30" rows="5" class="form-control no-resize" required></textarea>
         <label class="form-label">AMAL TARBAWI</label>
     </div>
 </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary waves-effect">Simpan</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
@foreach($lihat_guru as $data)
       <div class="modal fade" id="modalsiswa{{$data->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
         <h4 class="modal-title" id="defaultModalLabel">DAFTAR MURID DARI <u>{{$data->nama}}</u></h4>
                        </div>
                        
                        <div class="modal-body">
                           <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>                                        
                                        <th>NIS</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                     <?php  
                                     $id_guru = $data->id;
$data_relasi = DB::table('relasi_guru')->where('id_guru',$id_guru)
                            ->select('siswa.nama','siswa.nis','relasi_guru.id')
                            ->join('guru','guru.id','=','relasi_guru.id_guru')
                            ->join('siswa','siswa.id','=','relasi_guru.id_siswa')
                            ->get();
                                     $count = 1; 
                                     ?>
                                 @foreach($data_relasi as $data)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->nis}}</td>
                                        <td>
        
    <a href="guru_murid_hapus/{{$data->id}}" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="bottom" title="Hapus Murid">Hapus</a>
                   
                                        </td>
                                    </tr>
                                    @endforeach
                       
                                </tbody>
                            </table>
                            <br>
<form id="form_validation" method="post" action="guru_murid_create" enctype="multipart/form-data">
    {{ csrf_field() }}
                                <label>Tambah Murid</label>
                                    <select name="id_siswa" class="form-control show-tick">
                                        <option value="">-- Pilih  --</option>
                                 @foreach($lihat_siswa as $data)
                                    <option value="{{$data->id}}">{{$data->nama}} ({{$data->nis}})</option>
                                        @endforeach
                                    </select>
<input type="hidden" name="id_guru" value="<?php echo $id_guru;?>">
                                <button type="submit" class="btn btn-primary waves-effect" style="margin-top: 10px;">Tambah</button>    
                            </form>
                            
                        <br>                                     
                                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Tutup</button>
                        </div>
                    
                    </div>
                </div>
            </div>      
  @endforeach 

  @foreach($lihat as $data)
<!-- Default Size -->
            <div class="modal fade" id="modal_amal{{$data->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Ubah Amal</h4>
                        </div>
        <form id="form_validation" method="post" action="ubah_amal/{{$data->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
                        <div class="modal-body">
     <div class="form-group form-float">
                            <label>KELAS</label>
                                    <select name="kelas" class="form-control show-tick">
                                        <option value="7">Kelas 7</option>
                                        <option value="8">Kelas 8</option>
                                        <option value="9">Kelas 9</option>
                                    </select>
                                </div>  
 <div class="form-group form-float">
    <div class="form-line">
        <textarea name="amal" cols="30" rows="5" class="form-control no-resize">{{$data->amal}}</textarea>
         <label class="form-label">AMAL TARBAWI</label>
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