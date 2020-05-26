  <header id="app_topnavbar-wrapper">
      <nav role="navigation" class="navbar topnavbar">
        <div class="nav-wrapper">
          <ul class="nav navbar-nav pull-left left-menu">
            <li class="app_menu-open">
              <a href="javascript:void(0)" data-toggle-state="app_sidebar-left-open" data-key="leftSideBar">
                <i class="zmdi zmdi-menu"></i>
              </a>
            </li>
          </ul>
          <ul class="nav navbar-nav left-menu hidden-xs">
            <li>
              <a href="home.php" class="nav-link">
                <span>Home</span>
              </a>
            </li>
             <li>
              <a href="home.php" "javascript:void(0)" class="nav-link">
                <span>Agenda Folders</span>
              </a>
            </li>
             <li>
              <a href="home.php" class="nav-link">
                <span>Proposals</span>
              </a>
            </li>
             <li>
              <a href="home.php"class="nav-link">
                <span>Board Resolutions</span>
              </a>
            </li>
            <li>
              <a href="home.php" class="nav-link">
                <span>Reports</span>
              </a>
            </li>

            <li class="dropdown dropdown-lg app_menu_launcher hidden-xs">
              <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                <span>Accounts</span>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu dropdown-lg-menu dropdown-menu-left btn-primary p-15 text-center">
                <li>
                  <ul>
                    <li><a href="home.php"><i class="zmdi zmdi-email"></i><span>Admin</span></a></li>
                    <li><a href="home.php"><i class="zmdi zmdi-accounts-list"></i><span>Proponent</span></a></li>
                    <li><a href="home.php"><i class="zmdi zmdi-comment-text"></i><span>Attendee</span></a></li>
                  </ul>
                </li>
              </ul>
            </li>
          <ul class="nav navbar-nav pull-right">
            <li class="dropdown avatar-menu">
              <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                <span class="meta">
                  <span class="avatar">
                    <img src="{{ asset('assets/img/profiles/female.jpg') }}" alt="" class="img-circle max-w-35">
                    <i class="badge mini success status"></i>
                  </span>
                  <span class="name"></span>
                  <span class="caret"></span>
                </span>
              </a>
              <ul class="dropdown-menu btn-primary dropdown-menu-right">
                <li>
                  <a href="{{ route('myprofile') }}"><i class="zmdi zmdi-account"></i> Profile</a>
                </li>
                <li>
                  <a href="{{ route('myaccount') }}"><i class="zmdi zmdi-settings"></i> Account Settings</a>
                </li>
                <li>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="zmdi zmdi-sign-in"></i>Log Out</a>
                            <!-- {{ __('Logout') }} -->
                                   
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                  </form>
                </li>
              </ul>
            </li>
            </li>
            <li class="dropdown hidden-xs hidden-sm">
              <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                <span class="badge mini status danger"></span>
                <i class="zmdi zmdi-notifications"></i>
              </a>
              <ul class="dropdown-menu dropdown-lg-menu dropdown-menu-right dropdown-alt">
                <li class="dropdown-menu-header">
                  <ul class="card-actions icons  left-top">
                    <li class="withoutripple">
                      <a href="javascript:void(0)" class="withoutripple">
                        <i class="zmdi zmdi-settings"></i>
                      </a>
                    </li>
                  </ul>
                  <h5>NOTIFICATIONS</h5>
                  <ul class="card-actions icons right-top">
                    <li>
                      <a href="javascript:void(0)">
                        <i class="zmdi zmdi-check-all"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                
                           
                
              </ul>
            </li>
           
          </ul>
        </div>
        <form role="search" action="" class="navbar-form" id="navbar_form">
          <div class="form-group">
            <input type="text" placeholder="Search and press enter..." class="form-control" id="navbar_search" autocomplete="off">
            <i data-navsearch-close class="zmdi zmdi-close close-search"></i>
          </div>
          <button type="submit" class="hidden btn btn-default">Submit</button>
        </form>
      </nav>
    </header>

    
    <aside id="app_sidebar-left">
      <div id="logo_wrapper">
        <ul>
          <li class="logo-icon">
            <a href="index.html">
              <div class="logo">
               <img src="../include/assets/img/logo/bu-logo.png" alt="Logo">
              </div>
              <h1 class="brand-text">PapMApp</h1>
            </a>
          </li>
          <li class="menu-icon">
            <a href="javascript:void(0)" role="button" data-toggle-state="app_sidebar-menu-collapsed" data-key="leftSideBar">
              <i class="mdi mdi-backburger"></i>
            </a>
          </li>
        </ul>
      </div>
      <nav id="app_main-menu-wrapper" class="scrollbar">
        <div class="sidebar-inner sidebar-push">
          <ul class="nav nav-pills nav-stacked">
            <li class="sidebar-header">NAVIGATION</li>
            <li class="active"><a href="{!! url('/home'); !!}"><i class="zmdi zmdi-home"></i>Home</a></li>
            <li class="active"><a href="{!! url('/folder'); !!}"><i class="zmdi zmdi-folder-outline"></i>Agenda Folders</a></li>
            <li class="active"><a href="{!! url('/proposal'); !!}"><i class="zmdi zmdi-calendar-note"></i>Proposals</a></li>
            <li class="active"><a href="{!! url('/resolution'); !!}"><i class="zmdi zmdi-file"></i>Board Resolutions</a></li>
            <li class="active"><a href="{!! url('/reports'); !!}"><i class="zmdi zmdi-view-subtitles"></i>Reports</a></li>

            <li class="nav-dropdown">
              <a href="#"><i class="zmdi zmdi-accounts-alt"></i>Accounts</a>
              <ul class="nav-sub">
                <li><a href="{!! url('/admin'); !!}">Administrator</a></li>
                <li><a href="{!! url('/proponent'); !!}">Proponent</a></li>
                <li><a href="{!! url('/attendee'); !!}">Attendee</a></li>
              </ul>
            </li>
            <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-case-download"></i>Archives</a>
              <ul class="nav-sub">
                 <li><a href="{!! url('/bulk'); !!}">For Bulk Archivals</a></li>
                <li><a href="{!! url('/archives'); !!}">Archived</a></li> 
              </ul>
            </li>
            <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-photo-size-select-large"></i>Manage Content</a>    
              <ul class="nav-sub">
                <li><a href="{!! url('/background'); !!}">Background</a></li>
                <li><a href="{!! url('/position'); !!}">Position</a></li>
                <li><a href="{!! url('/unit'); !!}">Unit</a></li>
                <li><a href="{!! url('/banner'); !!}">Banner</a></li>
              </ul>  
            </li>

                      
        </div>
        </nav>
    </aside> 