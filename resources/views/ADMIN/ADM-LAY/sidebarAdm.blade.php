  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('IMG/DA.jpeg') }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="{{ route('admin') }}" class="d-block">Dimas Ismawan Abdullah</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-header">UTAMA</li>
                  <li class="nav-item">
                      <a href="{{ route('admin') }}" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>

                  <li class="nav-header">Menu</li>
                  <li class="nav-item">
                      <a href="{{ route('profile') }}" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Profile
                          </p>
                      </a>
                  </li>
                  {{-- <li class="nav-item">
            <a href="{{route('skills')}}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Skils
              </p>
            </a>
          </li> --}}
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
