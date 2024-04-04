            <aside class="main-sidebar sidebar-dark-primary elevation-4" style="overflow-y:scroll !important;">
            <!-- Brand Logo -->
            <a href="{{ url('') }}" class="brand-link">
            <span class="brand-text font-weight-light" style="font-size:28px">Olympics</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
            <a href="{{ url('admin') }}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            {{ __('staticword.dashboard')  }}
            </p>
            </a>
            </li>


            <li class="nav-item">
              <a href="{{ route('videos.index') }}" class="nav-link">
              <i class="fas fa-video nav-icon"></i>
              <p>{{ __('staticword.Videos')  }}</p>
              </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                <i class="fas fa-eye nav-icon"></i>
                  <p>  {{ __('staticword.users')  }}</p>
                </a>
              </li>

              <li class="nav-item">
            <a href="{{ url('/admin/clear-cache') }}" class="nav-link">
            <i class="fas fa-broom nav-icon"></i>
            <p>{{ __('staticword.clear cache')  }}</p>
            </a>
            </li>

            <li class="nav-item">
            <a href="{{ url('/admin/profile') }}" class="nav-link">
            <i class="fas fa-user-alt nav-icon"></i>
            <p>{{ __('staticword.my profiles')  }}</p>
            </a>
            </li>

            
            <li class="nav-item">
            <a href="{{ route('change.password') }}" class="nav-link">
            <i class="fas fa-user-alt nav-icon"></i>
            <p>{{__('staticword.change password')  }}</p>
            </a>
            </li>

            <li class="nav-item">
            <a class="nav-link"  href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>{{ __('staticword.logout')  }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
            </li>

            
  
   
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
            </aside>



