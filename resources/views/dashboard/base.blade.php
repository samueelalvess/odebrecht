<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Café Odebrecht - Sistema de Pedidos</title>
    <!-- CSS BASE -->
    <link href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/css/custom.min.css') }}" rel="stylesheet">
    @yield('css')
    <!--  -->
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- INCLUDE MENU LATERAL ESQUERDO -->
        @include('dashboard.includes.leftmenu')
        <!-- ***************************** -->

        <!-- INCLUDE TOP NAV -->
        @include('dashboard.includes.topnav')
        <!-- ***************************** -->


        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>@yield('title')</h3>
              </div>
            </div>
            <div class="clearfix"></div>

              @yield('content')

          </div>
        </div>


        <!-- INCLUDE FOOTER -->
        @include('dashboard.includes.footer')
        <!-- ***************************** -->

      </div>
    </div>

    <!-- SCRIPTS BASE -->
    <script src="{{ asset('dashboard/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/custom.min.js') }}"></script>
    @yield('javascript')
    <!--  -->
  </body>
</html>
