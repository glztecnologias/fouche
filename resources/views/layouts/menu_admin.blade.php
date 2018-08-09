<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li <?php if($pagina == 'index'){echo 'class="active"';} ?>>
            <a href="/admin"><span class="label label-primary" style="font-size:14px;"><i class="fa fa-home" aria-hidden="true"></i></span> Inicio</a>
        </li>
        <li <?php if($pagina == 'empresas'){echo 'class="active"';} ?>>
            <a href="/admin/empresas">
              <span class="label label-primary" style="font-size:14px;">
              <i class="fa fa-university" aria-hidden="true"></i></span>
              Empresas</a>
        </li>
        <li <?php if($pagina == 'pedidos'){echo 'class="active"';} ?>>
            <a href="/admin/pedidos">
              <span class="label label-primary" style="font-size:14px;">
              <i class="fa fa-hand-o-up" aria-hidden="true"></i></span> Pedidos</a>
        </li>

        <!--<li <?php if($pagina == 'ordenes_corte'){echo 'class="active"';} ?>>
            <a href="/admin/ordenes_corte">
              <span class="label label-primary" style="font-size:14px;">
              <i class="fa fa-scissors" aria-hidden="true"></i></span> Ordenes de Corte</a>
        </li>-->

        <li <?php if($pagina == 'composturas'){echo 'class="active"';} ?>>
            <a href="/admin/composturas">
              <span class="label label-primary" style="font-size:14px;">
              <i class="fa fa-magic" aria-hidden="true"></i></span> Composturas</a>
        </li>

        <!--<li <?php if($pagina == 'm_articulos'){echo 'class="active"';} ?>>
            <a href="/admin/m_articulos">
              <span class="label label-primary" style="font-size:14px;">
              <i class="fa fa-tasks" aria-hidden="true"></i></span> Mant. Articulos</a>
        </li>-->

        <li <?php if($pagina == 'cuenta'){echo 'class="active"';} ?>>
            <a href="/admin/cuenta" >
              <span class="label label-primary" style="font-size:14px;">
              <i class="fa fa-user" aria-hidden="true"></i></span> Cuenta</a>
        </li>
    </ul>
</div>
