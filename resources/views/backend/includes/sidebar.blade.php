 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('/') }}backend/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ACC&S</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/') }}backend/assets/dist/img/library_admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('/dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Issue/Return Info
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/issues/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Issue</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/issues')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Issue List</p>
                </a>
              </li>
            </ul>
          </li>
         {{--<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Rank Info
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/rankk/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Rank</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/rankk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rank List</p>
                </a>
              </li>
            </ul>
          </li>--}}
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Member Info
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/members/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/members')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Books Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/book_shelves/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add General Books</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/armyCretate')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Army Books</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/uploadExcelCreate')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload CSV File</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/book_shelves')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Book List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/armyBookList')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Army Book List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
               @csrf
            <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>     
            </a>
             </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>