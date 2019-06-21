        <div id="sidebar">
            <div class="d-block">
                <!-- <h3 class="float-left text-read pt-1 pl-3 mb-0">Admin</h3>                     -->
                <a href="javscript:;" class="text-light" data-toggle=".fill" id="sidebar-toggle"> 
                        <i class="la la-ellipsis-h la-2x"></i>
                </a>                                
            </div>
            <ul class="pb-5 pl-4 admin-menu dekstop-menu">
                
                <h4 class="text-light pt-1 pl-6 mb-4">
                    <img src="{{asset('admin/images/textlogo.png')}}" width="200px;" height="auto"/>
                </h4>                                        
                <li data-sidebar="dashboard"><a class="py-3 px-3" href="{{url('home')}}"><i class="la la-dashboard"></i><span>Dashboard</span></a></li>
                <li data-sidebar="widgets"><a class="py-3 px-3" href="{{url('participants')}}"><i class="la la-users"></i><span>Peserta</span></a></li>
                <li data-sidebar="charts"><a class="py-3 px-3" href="{{url('payments')}}"><i class="la la-money"></i><span>Pembayaran</span></a></li>
                <li data-sidebar="elements"><a class="py-3 px-3" href="{{url('grades')}}"><i class="la la-pencil-square"></i><span>Nilai</span></a></li>
                <li data-sidebar="forms"><a class="py-3 px-3" href="{{url('notifications')}}"><i class="la la-bell"></i><span>Notifikasi</span></a></li>
                <li data-sidebar="forms"><a class="py-3 px-3" href="{{url('announcements')}}"><i class="la la-bell"></i><span>Pengumuman</span></a></li>
                <li data-sidebar="forms"><a class="py-3 px-3" href="{{url('informations')}}"><i class="la la-bell"></i><span>Informasi</span></a></li>
                <li data-sidebar="setting"><a class="py-3 px-3" href="{{url('settings')}}"><i class="la la-gears"></i><span>Settings</span></a></li>
            </ul>
        </div>