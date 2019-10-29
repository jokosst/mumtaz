@extends('layouts.index')
@section('content')
   <section class="content">
        <div class="container-fluid">
           

            <div class="row clearfix">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>PILIH TAHUN AJARAN DAN SEMESTER</h2>
                             <ul class="header-dropdown m-r-5">
                                <li>
                                    <!-- <a href="tambah_siswa" class="btn btn-primary waves-effect">
                                         +TAMBAH
                                    </a> -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                <div class="row clearfix">
                  <form id="form_validation" method="post" action="pilih_siswa" enctype="multipart/form-data">
    {{ csrf_field() }}
                        <div class="col-md-4">
                        <div class="form-group form-float">
                        <div class="form-line">
                    <select name="id_ajaran" class="form-control show-tick">
                                 @foreach($lihat_ajaran as $data)
                <option value="{{$data->id}}">{{$data->tahun}} ({{$data->sesi}})</option>
                                        @endforeach
                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                                    <div class="form-group">
                    <button class="btn btn-primary waves-effect" type="submit">CARI</button>
                                    </div>
                                </div>
                            </form>
                    </div>
            <div class="row clearfix">
                                
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>LAPORAN AMAL YAUMI</h2>
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
                                        <th>No</th>
                                        <th>NAMA GURU</th>
                                        <th>Lihat</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>NAMA GURU</th>
                                        <th>Lihat</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                     
                       
                                </tbody>
                             </table>
                           
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>ABSEN MURID</h2>
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
                                        <th>No</th>
                                        <th>NAMA SISWA / SISWI</th>
                                        <th>NIS</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>NAMA SISWA / SISWI</th>
                                        <th>NIS</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                     
                             </table>
                           
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
               
            </div>
        </div>
    </section>

   
    @stop