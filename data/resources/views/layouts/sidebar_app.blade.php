 <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ asset('assets/images/logo.jpg')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>{{Auth::user()->nama}}</b></div>
                   
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU</li>
                    <li class="active">
                        <a href="{{URL::to('/mobile')}}">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('mobile/pilih_siswa')}}">
                            <i class="material-icons">chrome_reader_mode</i>
                            <span>Input Nilai</span>
                        </a>
                    </li>
                     <li>
                        <a href="{{URL::to('mobile/data_nilai')}}">
                            <i class="material-icons">assignment</i>
                            <span>Data Nilai</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('mobile/profile')}}">
                            <i class="material-icons">account_circle</i>
                            <span>Profil</span>
                        </a>
                    </li>
                   
                   
                    <li>
                        <a href="{{URL::to('logout')}}">
                            <i class="material-icons">input</i>
                            <span>Keluar</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
       
    </section>