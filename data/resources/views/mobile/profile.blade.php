@extends('layouts.index_app')
@section('content')
   <section class="content">
        <!-- <div class="container-fluid"> -->
           
@if(Session::has('msg'))
                            <div class="alert bg-teal alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               {{Session::get('msg')}} .
                               @endif
                            </div> 
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>PROFIL</h2>
                             <ul class="header-dropdown m-r-5">
                                <li>
                                    <!-- <a href="tambah_siswa" class="btn btn-primary waves-effect">
                                         +TAMBAH
                                    </a> -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
<form id="form_validation" method="post" action="{{URL::to('mobile/profile_update')}}/{{$lihat->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="form-group form-float">
    <div class="form-line">
         <input type="text" class="form-control" name="nama" value="{{$lihat->nama}}">
        <label class="form-label">Nama Lengkap</label>
    </div>
 </div>
<div class="form-group form-float">
    <div class="form-line">
         <input type="text" class="form-control" name="pendidikan" value="{{$lihat->pendidikan}}">
        <label class="form-label">Pendidikan</label>
    </div>
 </div>
 <div class="form-group">
  @if($lihat->jenis_kelamin == 'Laki - laki')
    <input type="radio" name="jenis_kelamin" value="Laki - laki" id="male" class="with-gap" checked>
    <label for="male">Laki - laki</label>

    <input type="radio" name="jenis_kelamin" value="Perempuan"  id="female" class="with-gap">
    <label for="female" class="m-l-20">Perempuan</label>
    @else
    <input type="radio" name="jenis_kelamin" value="Laki - laki" id="male" class="with-gap" >
    <label for="male">Laki - laki</label>

    <input type="radio" name="jenis_kelamin" value="Perempuan"  id="female" class="with-gap" checked>
    <label for="female" class="m-l-20">Perempuan</label>
    @endif
</div>
 <div class="form-group form-float">
    <div class="form-line">
         <input type="text" class="form-control" name="no_hp" value="{{$lihat->no_hp}}">
        <label class="form-label">No HP</label>
    </div>
 </div>
 <div class="form-group form-float">
    <div class="form-line">
         <input type="text" class="form-control" name="email" value="{{$lihat->email}}">
        <label class="form-label">E-mail</label>
    </div>
 </div>
 <div class="form-group form-float">
    <div class="form-line">
        <textarea name="alamat" cols="30" rows="5" class="form-control no-resize">{{$lihat->alamat}}</textarea>
         <label class="form-label">Alamat</label>
     </div>
 </div>
  <button class="btn btn-primary waves-effect" type="submit">Ubah</button>
     </form>
                           
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>GANTI PASSWORD AKUN</h2>
                             <ul class="header-dropdown m-r-5">
                                <li>
                                    <!-- <a href="tambah_siswa" class="btn btn-primary waves-effect">
                                         +TAMBAH
                                    </a> -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
    <form id="form_validation" method="post" action="{{URL::to('mobile/pass_update')}}/{{$data_pass->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="form-group form-float">
    <div class="form-line">
         <input type="text" class="form-control" name="username" value="{{$data_pass->username}}">
        <label class="form-label">Username</label>
    </div>
 </div>
<div class="form-group form-float">
    <div class="form-line">
         <input type="text" class="form-control" name="password" required>
        <label class="form-label">Password</label>
    </div>
 </div>
 
  <button class="btn btn-primary waves-effect" type="submit">Ubah</button>
     </form>
                           
                        </div>
                    </div>
                </div>
                
                <!-- #END# Task Info -->
               
            </div>
        <!-- </div> -->
    </section>

   
    @stop