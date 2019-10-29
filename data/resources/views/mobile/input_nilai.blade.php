@extends('layouts.index_app')
@section('content')
   <section class="content">
        <!-- <div class="container-fluid"> -->
           

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>AMAL YAUMI Th.{{$lihat_ajaran->tahun}} ({{$lihat_ajaran->sesi}})</h2>
                             <ul class="header-dropdown m-r-5">
                                <li>
                                    <!-- <a href="tambah_siswa" class="btn btn-primary waves-effect">
                                         +TAMBAH
                                    </a> -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
    <form id="form_validation" method="post" action="{{URL::to('mobile/nilai_create')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
   
    @foreach($lihat as $data)
    <label for="email_address">{{$data->amal}}</label>
<div class="form-group form-float">
    <div class="form-line">
         <input type="number" class="form-control" name="score[]" required>
         <input type="hidden" name="id_amal[]" value="{{$data->id}}">
    </div>
 </div>
 @endforeach 
<input type="hidden" name="id_siswa" value="{{$lihat_id_siswa}}">
<input type="hidden" name="id_ajaran" value="{{$lihat_ajaran->id}}">
  <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
     </form>
                           
                        </div>
                    </div>
                </div>
                
                <!-- #END# Task Info -->
               
            </div>
        <!-- </div> -->
    </section>

   
    @stop