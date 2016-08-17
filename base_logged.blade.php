<!doctype html>
<!--[if lt IE 7 ]>
<html class="ie ie6 no-js" lang="en"><![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7 no-js" lang="en"><![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="es">
<!--<![endif]-->
<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
<script src="assets/js/lib/html5.js"></script>  <![endif]-->
<html>
<head>
    @include('partials.head')
    {{ HTML::style('assets/css/app.css')  }}
</head>

<body class="width-table-full" style="opacity: 0">

<header class="animated fadeInUp">
    @include('partials.header')
    @include('partials.modals')
</header>

@if($viewAsUser)

    <div class="box-view-as">
        Está viendo e interactuando comofdasfdsa el usuario <strong>{{ $viewAsUserName }}</strong>. <a href="{{ url('/leave-view-as') }}"
                                                                                               target="_self">Clic para
            dejar de ver</a>
    </div>

@endif


<section class="barra_int"></section>

<div class="asocreto_dash_table">
  <div class="asocreto_dash_row">
    <div class="asocreto_dash_cell asocreto_dash_menu">
      <section class="asocreto_menu_principal">

        <!--Contenidos Sitio-->
        <div class="asocreto_table">
          <div class="asocreto_row">
            <div class="asocreto_cell asocreto_menu">
              <!--  Menu  -->
              <div class="asocreto_menu_table">
                <div class="asocreto_menu_row">
                  <div class="asocreto_menu_cell" onclick="window.location='http://crmimaginamos.com/asocreto/public/';">
                    <span class="icon-icon01"></span>
                    Dashboard
                  </div>
                </div>
                <div class="asocreto_menu_row">
                  <div class="asocreto_menu_cell" onclick="window.location='http://crmimaginamos.com/asocreto/public/customers?type=all';">
                    <span class="icon-icon02"></span>
                    Clientes
                  </div>
                </div>
                <div class="asocreto_menu_row">
                  <div class="asocreto_menu_cell">
                    <span class="icon-icon03"></span>
                    Ventas
                  </div>
                </div>
                <div class="asocreto_menu_row">
                  <div class="asocreto_menu_cell">
                    <span class="icon-icon04"></span>
                    Productos
                  </div>
                </div>
                <div class="asocreto_menu_row">
                  <div class="asocreto_menu_cell">
                    <span class="icon-icon05"></span>
                    Reportes
                  </div>
                </div>
                <div class="asocreto_menu_row">
                  <div class="asocreto_menu_cell">
                  <span class="icon-icon06"></span>
                    Actividades
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="asocreto_dash_cell asocreto_dash_contenido">
      <section class="cont_home" style="margin-top: 10px;">
        @yield('content')
      </section>
    </div>
  </div>
</div>



<!--Fin Contenidos Sitio-->

<section class="content_all ">
    <div class="clear"></div>
    @include('partials.footer')
</section>

@include('partials.app-scripts')
<script type="text/javascript">
    $( document ).ready(function() {
        $('body').css('opacity', 1)
    });

</script>

</body>
</html>