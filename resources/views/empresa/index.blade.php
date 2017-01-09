<?php $seccion = 'empresa'; ?>
<?php $pagina = 'index'; ?>
@extends('dashboard')
@section('title','Empresa - Inicio')
@section('content')
<h4><span class="label label-primary">Pasos de Operacion</span></h4>

<dl class="dl-horizontal">
  <dt>1.Empleados</dt>
  <dd>En <a href="/empresa/empleados">"Empleados"</a> se gestionan (crean/editan/eliminan) a todos los empleados de la empresa. se crean de a uno o en una lista excel.</dd>
  <dt>2.Toma de Medidas</dt>
  <dd> En la misma seccion anterior , en la parte inferior se puede crear una toma de medida, seleccionando primero a los empleados involucrados (Haciendo Clic en la fila de la tabla) y luego insertando los datos que se piden</dd>
  <dt>3. Pedidos y Medidas</dt>
  <dd>Aca se gestionan las tomas de medidas, donde se ven los detalles y avance de la Toma de Medida, una vez que esta al 100% esta se puede enviar como pedido a FOUCHE.</dd>
  <dt>4. Composturas</dt>
  <dd>Una ves enviado el pedido a fouche se pueden solicitar una compostura y aparecera en la lista de composturas creadas.</dd>

</dl>
<br>

<h4><span class="label label-primary">Resumen</span></h4>

<div class="row">
  <div class="col-xs-6 col-sm-3">
    <div class="" style="text-align:center;background-color:#337ab7;padding: 25px;border-radius:10px;max-width:auto;">
      <a href="/empresa/empleados">
          <i class="fa fa-users" aria-hidden="true" style="font-size:7em;color:white"></i>
      </a>
      <h3 style="color:white;font-weight:bold;">{{$empleados->count()}}</h3>
      <h3 ><a style="color:white;font-weight:bold;" href="/empresa/empleados">Empleados</a></h3>
    </div>
    </div>
    <div class="col-xs-6 col-sm-3">
    <div class="" style="text-align:center;background-color:#337ab7;padding: 25px;border-radius:10px;width:auto;">
      <a href="/empresa/pedidos_medidas">
          <i class="fa fa-pencil" aria-hidden="true" style="font-size:7em;color:white"></i>
      </a>
      <h3 style="color:white;font-weight:bold;">{{$toma_medida->count()}}</h3>
      <h3><a style="color:white;font-weight:bold;" href="/empresa/pedidos_medidas">Toma de Medidas Activas</a></h3>
      </div>

  </div>
  <div class="col-xs-6 col-sm-3">
    <div class="" style="text-align:center;background-color:#337ab7;padding: 25px;border-radius:10px;width:auto;">
      <a href="/empresa/pedidos_medidas">

          <i class="fa fa-hand-o-up" aria-hidden="true" style="font-size:7em;color:white"></i>
      </a>
      <h3 style="color:white;font-weight:bold;" >{{$pedidos->count()}}</h3>
      <h3><a  style="color:white;font-weight:bold;" href="/empresa/pedidos_medidas">Pedidos</a></h3>
      </div>
      </div>
      <div class="col-xs-6 col-sm-3">
      <div class="" style="text-align:center;background-color:#337ab7;padding: 25px;border-radius:10px;width:auto;">
        <a href="/empresa/composturas" style="color:white;">
            <i class="fa fa-scissors" aria-hidden="true" style="font-size:7em;"></i>
        </a>
        <h3 style="color:white;font-weight:bold;" >{{$composturas_empresa->count()}}</h3>
        <h3><a  style="color:white;font-weight:bold;" href="/empresa/composturas">Composturas</a></h3>
        </div>

  </div>
</div>


@include('layouts.footer')
@endsection
