<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{route('home')}}" class="site_title"> <span>CAFÉ ODEBRECHT</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="{{ asset('dashboard/assets/img/img.jpg') }}" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Bem-vindo,</span>
        <h2>Samuel Alves</h2>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Menu</h3>
        <ul class="nav side-menu">
          <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicial </a></li>
          <li><a href="{{route('clientList')}}"><i class="fa fa-users"></i> Clientes </a></li>
          <li><a href="{{route('sellerList')}}"><i class="fa fa-male"></i> Vendedores </a></li>
          <li><a><i class="fa fa-shopping-cart"></i> Pedidos <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('newOrder')}}">Novo Pedido</a></li>
              <li><a href="{{route('billedList')}}">Pedidos faturados</a></li>
              <li><a href="{{route('notbilledList')}}">Pedidos não faturados</a></li>
            </ul>
          </li>
          <li><a href="{{route('informativeList')}}"><i class="fa fa-info"></i> Informativos </a></li>
        </ul>
      </div>
      <div class="menu_section">
        <h3>Perfil</h3>
        <ul class="nav side-menu">
          <li><a href="f"><i class="fa fa-user"></i> Meu Perfil </a></li>
          <li><a href="f"><i class="fa fa-cogs"></i> Configurações </a></li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Sair" href="login.html">
        <span class="fa fa-power-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
