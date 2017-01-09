<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="/assets/img/logofooter2.png" alt="" height="30" /></a>
    </div>
    <!-- Top Menu Items -->
    @include('layouts.header')
    <!-- ############## -->
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    @if ( $seccion == 'empresa' )

          @include('layouts.menu_empresa')

    @elseif ( $seccion == 'empleado')

         @include('layouts.menu_empleado')

    @elseif ( $seccion == 'admin')

         @include('layouts.menu_admin')

    @endif



    <!-- /.navbar-collapse -->
</nav>
