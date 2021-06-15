
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               {{-- list dropdown --}}
               <li class="nav-item">
                 <a href="/pengumuman" class="nav-link">
                   <i class="nav-icon fas fa-bullhorn"></i>
                   <p>
                     Pengumuman
                     <span class="right badge badge-danger">New</span>
                   </p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="{{ route('activity.index') }}" class="nav-link">
                     <i class="nav-icon fas fa-chart-line"></i>
                   <p>
                     Kegiatan
                   </p>
                 </a>
               </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('student.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                      Mahasiswa
                    </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('lectur.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user-tie"></i>
                    <p>
                      Dosen
                    </p>
                </a>
              </li>
              {{-- endlistdropdown --}}
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
