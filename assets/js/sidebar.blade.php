 <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('assets/images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->sebagai}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{URL::to('/edit_password')}}/{{Auth::user()->id}}"><i class="material-icons">person</i>Ganti Password</a></li>
                            <li><a href="{{URL::to('/keluar')}}"><i class="material-icons">input</i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU</li>
                    <li class="active">
                        <a href="{{URL::to('/')}}">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                     
                     @if(Auth::user()->sebagai == 'pimpinan')
                        <li>
                         <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>Olah Data</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{URL::to('/pemohon')}}">
                                    <span>Lihat Data Pemohon</span>
                                </a>
                        </li>
                        <li>
                                <a href="{{URL::to('/reklame')}}">
                                    <span>Lihat Data Reklame</span>
                                </a>
                        </li>
                        <li>
                                <a href="{{URL::to('/alasan_penolakan')}}">
                                    <span>Alasan Penolakan</span>
                                </a>
                        </li>
                        <li>
                                <a href="{{URL::to('/pejabat')}}">
                                    <span>Lihat Data Pejabat</span>
                                </a>
                        </li>
                        <li>
                                <a href="{{URL::to('/peraturan')}}">
                                    <span>Peraturan Tambahan</span>
                                </a>
                        </li>
                    </ul>
                    </li>
                      <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">print</i>
                            <span>Cetak Data</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{URL::to('/cetak_pemohon')}}">
                                    <span>Cetak Surat Pemohon</span>
                                </a>
                        </li>
                        <li>
                                <a href="{{URL::to('/laporan_pemohon')}}">
                                    <span>Laporan Data Pemohon</span>
                                </a>
                        </li>
                        <li>
                                <a href="{{URL::to('/cetak_reklame')}}">
                                    <span>Cetak Data Reklame</span>
                                </a>
                        </li>
                    </ul>
                    </li>
                    <!-- <li class="header">Pemberitahuan</li>
                    <li>
                        <a href="#">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Peringatan</span>
                        </a>
                    </li> -->
                    <!-- <li>
                        <a href="#">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Teguran</span>
                        </a>
                    </li> -->  

                     @endif

                     @if(Auth::user()->sebagai == 'admin')
                        
                <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">book</i>
                            <span>Data Permohonan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{URL::to('/inputpemohon')}}" >
                                    <span>Tambah Data Permohonan</span>
                                </a>
                        </li>
                        
                         <li>
                                <a href="{{URL::to('/proses_aktif')}}">
                                    <span>Status Proses Permohonan</span>
                                </a>
                        </li>
                        
                        <li>
                                <a href="{{URL::to('/pemohon')}}">
                                    <span>Lihat Data Permohonan</span>
                                </a>
                        </li>
                        
                        <li>
                                <a href="{{URL::to('/cetak_pemohon')}}">
                                    <span>Cetak Surat Permohonan</span>
                                </a>
                        </li>
                        
                        <li>
                                <a href="{{URL::to('/laporan_pemohon')}}">
                                    <span>Laporan Data Pemohon</span>
                                </a>
                        </li>        
                        </ul>
                        
                        <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">library_books</i>
                            <span>Data Reklame</span>
                        </a>
                        <ul class="ml-menu">
                            
                            <li>
                                <a href="{{URL::to('/tambah_reklame')}}" >
                                    <span>Tambah Data Reklame</span>
                                </a>
                            </li>
                            
                             <li>
                                <a href="{{URL::to('/reklame')}}">
                                    <span>Lihat Data Reklame</span>
                                </a>
                        </li>
                        
                        <li>
                                <a href="{{URL::to('/cetak_reklame')}}">
                                    <span>Cetak Data Reklame</span>
                                </a>
                        </li>
                    </ul>
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">note</i>
                            <span>Data Olah Surat</span>
                        </a>
                        <ul class="ml-menu">
                           
                        <li>
                                <a href="{{URL::to('/alasan_penolakan')}}" >
                                    <span>Data Alasan Penolakan</span>
                                </a>
                        </li>
                        <li>
                                <a href="{{URL::to('/peraturan')}}" >
                                    <span>Data Peraturan</span>
                                </a>
                        </li>
                        
                        
                         <li>
                                <a href="{{URL::to('/pejabat')}}">
                                    <span>Data Pejabat</span>
                                </a>
                        </li>
                       
                        <li>
                                <a href="{{URL::to('/gambar')}}"><span>Data Arsip Surat</span></a>
                            </li>
                            
                        
                        <li>
                                <a href="{{URL::to('/tambah_admin')}}" >
                                    <span>Data Admin</span>
                                </a>
                        </li>
                    </ul>
                        
                    </li>
                     @endif
<li>
<a href="javascript:void(0);" class="menu-toggle">
 <i class="material-icons">info</i>
 <span>Pemberitahuan</span></a>
<ul class="ml-menu">
<li>
<a href="{{URL::to('/proses_aktif')}}">
<i class="material-icons col-grey">donut_large</i>
<span>Masa Proses Aktif</span>
</a>
</li>
<li>
<a href="{{URL::to('/peringatan')}}">
<i class="material-icons col-green">donut_large</i>
<span>Alarm Habis Aktif</span>
</a>
</li>
<li>
<a href="{{URL::to('/noti_peringatan')}}">
<i class="material-icons col-amber">donut_large</i>
<span>Alarm Peringatan</span>
</a>
</li>
</li>
<li>
<a href="{{URL::to('/noti_teguran1')}}">
<i class="material-icons col-red">donut_large</i>
<span>Alarm Teguran 1</span>
</a>
</li>
<li>
<a href="{{URL::to('/noti_teguran2')}}">
<i class="material-icons col-red">donut_large</i>
<span>Alarm Teguran 2</span>
</a>
</li>
<li>
<a href="{{URL::to('/noti_teguran3')}}">
<i class="material-icons col-red">donut_large</i>
<span>Alarm Teguran 3</span>
</a>
</li>

</ul>
</li>
<li>
                        <a href="{{URL::to('/bantuan')}}">
                            <i class="material-icons">help_outline</i>
                            <span>Panduan</span>
                        </a>
                    </li>
    
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; {{ date('Y') }} <a href="http://www.flyjoewebdesign.hol.es" target="_blank">APLIKASI DATABASE REKLAME </a>.
                </div>
                <div class="version">
                   <!--  <b>Kota Singkawang </b> -->
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        