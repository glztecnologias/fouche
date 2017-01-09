<?php $seccion = 'admin'; ?>
<?php $pagina = 'index'; ?>
@extends('dashboard')
@section('title','Administracion - Inicio')
@section('content')

<h4><span class="label label-primary">Resumen</span></h4>

<div class="row">
  <div class="col-xs-6 col-sm-3">
    <div class="" style="text-align:center;background-color:#337ab7;padding: 25px;border-radius:10px;max-width:auto;">
      <a href="/empresa/empleados">
          <i class="fa fa-university" aria-hidden="true" style="font-size:7em;color:white"></i>
      </a>
      <h3 style="color:white;font-weight:bold;">{{ $empresas->count()}}</h3>
      <h3 ><a style="color:white;font-weight:bold;" href="/admin/empresas">Empresas</a></h3>
    </div>
    </div>

  <div class="col-xs-6 col-sm-3">
    <div class="" style="text-align:center;background-color:#337ab7;padding: 25px;border-radius:10px;width:auto;">
      <a href="/empresa/pedidos_medidas">

          <i class="fa fa-hand-o-up" aria-hidden="true" style="font-size:7em;color:white"></i>
      </a>
      <h3 style="color:white;font-weight:bold;" >{{ $pedidos->count()}}   </h3>
      <h3><a  style="color:white;font-weight:bold;" href="/admin/pedidos">Pedidos</a></h3>
      </div>
      </div>
      <div class="col-xs-6 col-sm-3">
      <div class="" style="text-align:center;background-color:#337ab7;padding: 25px;border-radius:10px;width:auto;">
        <a href="/empresa/composturas" style="color:white;">
            <i class="fa fa-scissors" aria-hidden="true" style="font-size:7em;"></i>
        </a>
        <h3 style="color:white;font-weight:bold;" >{{ $composturas->count()}}   </h3>
        <h3><a  style="color:white;font-weight:bold;" href="/admin/composturas">Composturas</a></h3>
        </div>

  </div>
</div>
@include('layouts.footer')
@endsection
