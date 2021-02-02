<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset("assets/$theme/dist/img/icon.png")}}" class="img-circle" >
        </div>
        <div class="pull-left info">
          <p style="padding-top: 5%;">LA SUEGRA TE QUIERE </p>
        </div>
      </div>
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li>
          <a  href="{{route('home')}}">
            <i class="fa fa-home"></i> <span>Inicio</span>
          </a>
        </li>
        <li>
         <a href="{{route('descuentosP')}}">
            <i class="fa fa-money"></i>
            <span>Registrar  Descuentos Blue</span>
          </a>
        </li>
        <li>
          <a href="{{route('descuentosP1')}}">
              <i class="fa fa-money"></i>
              <span>Registrar  Descuentos Platino</span>
            </a>
        </li>
         <li>
         <a href="{{route('descuentosPG')}}">
            <i class="fa fa-money"></i>
            <span>Registrar Grupo Descuentos Blue</span>
          </a>
        </li>
        <li>
          <a href="{{route('descuentosPG1')}}">
              <i class="fa fa-money"></i>
              <span>Registrar Grupo  Descuentos Platino</span>
            </a>
        </li>
        
        <li>
          <a href="{{route('crearp')}}">
              <i class="fa fa-plus-square"></i>
              <span>Crear Grupo Blue</span>
          </a>
        </li>
        <li>
          <a href="{{route('crearp1')}}">
              <i class="fa fa-plus-square"></i>
              <span>Crear Grupo Platino</span>
            </a>
        </li>
        <li>
          <a href="{{route('subir')}}">
              <i class="fa fa-file-picture-o"></i>
              <span>Subir imagen Promo Blue</span>
            </a>
        </li>
        <li>
          <a href="{{route('subir1')}}">
              <i class="fa fa-file-picture-o"></i>
              <span>Subir imagen Promo Platino</span>
            </a>
        </li>
        <li>
          <a href="{{route('subirNuestros')}}">
              <i class="fa fa-users"></i>
              <span>Nuestros Amigos</span>
            </a>
        </li>
        <li>
          <a href="{{route('sitios')}}">
              <i class="fa fa-map-o"></i>
              <span>Crear Sitio</span>
            </a>
        </li>
         
        <li>
          <a href="{{route('ciudad')}}">
              <i class="fa fa-institution"></i>
              <span>Consultar Ciudad</span>
            </a>
        </li>
        <li>
          <a href="{{route('datos')}}">
              <i class="fa fa-qrcode"></i>
              <span>Consultar QR</span>
            </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>