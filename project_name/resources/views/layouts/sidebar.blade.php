<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('posts.index') }}" class="brand-link">
      <!--<img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">-->
		<i class="fas fa-laptop-code fa-1x" ></i>
      <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!--<div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>-->
	@section('sidebar')
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            @if(!isset($active))
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('posts.index') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data in DB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('posts.create') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search API</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if(isset($active))
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('posts.index') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data in DB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('posts.create') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search API</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-item">
            <a href="http://www.omdbapi.com/" target="blank" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Document API
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
	@show
		<!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>