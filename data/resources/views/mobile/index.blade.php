@extends('layouts.index_app')
@section('content')
<div class="illustration">
<img src="{{ asset('assets/images/23.jpg')}}" style="max-width: 500px;padding-right: -15px">
</div>
<div style="text-align: center;margin-bottom: -155px">
<img class="img-circle center" src="{{ asset('assets/images/logo.jpg')}}" width="80" height="80" style="margin-top: -300px;box-shadow: 0 3px 10px rgba(0, 0, 0, 0);">
<h3 style="margin-top: -115px;color: #281458;">SMPIT AL-MUMTAZ</h3>
</div>



<section class="content">




           
        <div class="container-fluid">
           

            <div class="row clearfix">
                
                <!-- Task Info -->
                <a href="mobile/pilih_siswa">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="card">
                       <center><img src="{{ asset('assets/images/check-list.png')}}" width="100" style="margin-top: 7px;">
<p style="margin-top: 5px;"><b>INPUT NILAI</b></p>
       </center>
                        
                    </div>
                </div>
            </a>
            <a href="mobile/data_nilai">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="card">
                        <center><img src="{{ asset('assets/images/datanilai.png')}}" width="100" style="margin-top: 7px;">
<p style="margin-top: 5px;"><b>DATA NILAI</b></p>
       </center>
                        
                    </div>
                </div>
</a>
<a href="mobile/profile">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="card">
                        <center><img src="{{ asset('assets/images/approved.png')}}" width="100" style="margin-top: 7px;">
<p style="margin-top: 5px;"><b>PROFIL</b></p>
       </center>
                        
                    </div>
                </div>
            </a>
            <a href="#" data-toggle="modal" data-target="#defaultModal">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="card">
                        <center><img src="{{ asset('assets/images/resume.png')}}" width="100" style="margin-top: 7px;">
<p style="margin-top: 5px;"><b>TENTANG</b></p>
       </center>
                        
                    </div>
                </div>
            </a>
                <!-- #END# Task Info -->
               
            </div>
        </div>
       
    </section>
    
<!-- Default Size -->
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document" style="top: 30%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">TENTANG</h4>
                        </div>
                        
                        <div class="modal-body">
           <?php echo html_entity_decode($lihat_tentang->isi); ?>               
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">Tutup</button>
                        </div>
                    
                    </div>
                </div>
            </div>
   
    @stop