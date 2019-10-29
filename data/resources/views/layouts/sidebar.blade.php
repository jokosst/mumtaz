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
                    <!-- <div class="email">primayuliantoro@gmail.com</div> -->
                    <!-- <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div> -->
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
                     <li>
                        <a href="{{URL::to('guru')}}">
                            <i class="material-icons">school</i>
                            <span>Guru</span>
                        </a>
                    </li>
                    
                     <li>
                        <a href="{{URL::to('siswa')}}">
                            <i class="material-icons">assignment_ind</i>
                            <span>Siswa</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('ajaran')}}">
                            <i class="material-icons">date_range</i>
                            <span>Ajaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('amal')}}">
                            <i class="material-icons">assignment</i>
                            <span>Amal Tarbawi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('nilai')}}">
                            <i class="material-icons">verified_user</i>
                            <span>Nilai</span>
                        </a>
                    </li>
                  <li>
                        <a href="{{URL::to('ubah_password')}}">
                            <i class="material-icons">settings</i>
                            <span>Pengaturan</span>
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