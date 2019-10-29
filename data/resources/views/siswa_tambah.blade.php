@extends('layouts.index')
@section('content')
   <section class="content">
        <div class="container-fluid">
           

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH SISWA</h2>
                            
                        </div>
                        <div class="body">
<form id="form_validation" method="post" action="siswa_create" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="form-group form-float">
    <div class="form-line">
         <input type="text" class="form-control" name="nama" required>
        <label class="form-label">Nama Lengkap</label>
    </div>
 </div>
<div class="form-group form-float">
    <div class="form-line">
         <input type="text" class="form-control" name="nis" required>
        <label class="form-label">NIS</label>
    </div>
 </div>
 <div class="form-group">
    <input type="radio" name="jenis_kelamin" value="Laki - laki" id="male" class="with-gap">
    <label for="male">Laki - laki</label>

    <input type="radio" name="jenis_kelamin" value="Perempuan"  id="female" class="with-gap">
    <label for="female" class="m-l-20">Perempuan</label>
</div>
 <div class="form-group form-float">
    <div class="form-line">
        <textarea name="alamat" cols="30" rows="5" class="form-control no-resize" required></textarea>
         <label class="form-label">Alamat</label>
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

   
    @stop