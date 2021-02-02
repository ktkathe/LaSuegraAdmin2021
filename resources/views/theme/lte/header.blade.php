<header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span  class="logo-lg"><b>Admin</b> La Suegra</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">MENU</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset("assets/$theme/dist/img/icon.png")}}"  class="user-image" alt="User Image">
                <span class="hidden-xs">ADMIN</span>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <li class="user-footer">
                <form action="{{route('login_logout')}}" method="GET" autocomplete="off">
                 <button type="submit" style="background:#000033;color:#FFF;" class="btn btn-primary btn-block btn-flat">SALIR</button>
                </form>

               
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>