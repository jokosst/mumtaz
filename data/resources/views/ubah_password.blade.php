@extends('layouts.index')
@section('content')
   <section class="content">
        <div class="container-fluid">
           

            <div class="row clearfix">
              @if(Session::has('msg'))
              <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               {{Session::get('msg')}}.
                            </div>
                            @elseif(Session::has('msg2'))
                            <div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               {{Session::get('msg2')}} .
                            </div>
                            @endif
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>UBAH PASSWORD</h2>
                            
                        </div>
                        <div class="body">
<form id="form_validation" method="post" action="password_ubah" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="form-group form-float">
    <div class="form-line">
         <input type="text" class="form-control" name="nama" value="{{$lihat->nama}}">
        <label class="form-label">Nama Lengkap</label>
    </div>
 </div>
 <div class="form-group form-float">
    <div class="form-line">
         <input type="text" class="form-control" name="username" value="{{$lihat->username}}">
        <label class="form-label">Username</label>
    </div>
 </div>
  <div class="form-group form-float">
    <div class="form-line">
         <input type="text" class="form-control" name="password" >
        <label class="form-label">Password Baru</label>
    </div>
 </div>
 
  <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
     </form>
                           
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>TENTANG</h2>
                            
                        </div>
                        <div class="body">
<form id="form_validation" method="post" action="tentang_ubah" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
<textarea id="ckeditor" name="isi">
  {{$lihat_tentang->isi}}
</textarea>
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
   
    @stop

    