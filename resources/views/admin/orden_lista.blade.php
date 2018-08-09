<?php $seccion = 'admin'; ?>
<?php $pagina = 'ordenes_corte'; ?>
@extends('dashboard')
@section('title','Administracion - Orden de Corte')
@section('content')
<div id="contenido_orden_c">


<h4><span class="label label-primary">Detalle Orden Corte</span></h4>
<div class="row">
  <div class="col-md-4">
    <ul>
      <li><p>Empresa : <strong class="text-uppercase">{{$orden_corte->pedido->empresa->nombre}}</strong></p></li>
      <li><p>Fecha y Hora : <strong class="text-uppercase"><?php setlocale(LC_ALL, "es_CL.UTF-8"); $fecha= $orden_corte->created_at; echo date_format($fecha,"d-m-Y  |  H:i:s"); ?></strong></p></li>
      <li><p>Seccion:<strong class="text-uppercase">{{$orden_corte->pedido->seccion_empresa}} </strong></p></li>
      <li><p>Articulo : <strong class="text-uppercase">{{$articulo->codigo}} | {{$articulo->nombre}} | {{$articulo->sup_inf}}</strong></p></li>
      <li><p>Orden de Compra: <strong class="text-uppercase">{{$orden_corte->pedido->orden_de_compra}}</strong></p></li>
      <li><p>Total Orden Corte: <strong class="text-uppercase">{{$orden_corte->pedido->total_empleados}}</strong></p></li>
    </ul>
  </div>
  <div class="col-md-4">
    <ul>
      <li><p>Tela : <strong class="text-uppercase">{{$orden_corte->tela}}</strong></p></li>
      <li><p>Tela Aplicacion:<strong class="text-uppercase">{{$orden_corte->tela_aplicacion}}</strong></p></li>
      <li><p>Forro: <strong class="text-uppercase">{{$orden_corte->forro}}</strong></p></li>
      <li><p>Fusionado: <strong class="text-uppercase">{{$orden_corte->fusionado}}</strong></p></li>
      <li><p>Color Tela: <strong class="text-uppercase">{{$orden_corte->color_tela}}</strong></p></li>
    </ul>
  </div>
  <div class="col-md-4">
    <h4><span class="label label-default">Acciones</span></h4>
    <a href="javascript:imprSelec('contenido_orden_c')" name="button" class="btn btn-success"> <i class="fa fa-print" aria-hidden="true"></i>
 Imprimir Listado.</a>
    <button type="button" name="button" class="btn btn-primary"><i class="fa fa-list-alt" aria-hidden="true"></i>
 Listar Folios.</button>
    <a  name="button" class="btn btn-warning" href="javascript:location.reload();"> <i class="fa fa-refresh" aria-hidden="true"></i>
 Actualizar</a>
  </div>

</div>
<br>
<h4><span class="label label-primary">Personas y Medidas</span></h4>
<br>

@if($articulo->sup_inf=="superior")

<table class="table table-condensed">
   <thead>
      <tr>
         <th>#</th>
         <th>Nombre Completo</th>
         <th>Talla</th>
         <th>Busto / Pecho</th>
         <th>Cintura</th>
         <th>Cadera</th>
         <th>Largo Manga</th>
         <th>Largo Total</th>
         <th>Ancho Hombro</th>
         <th>Contorno Brazo</th>
         <th>Obs.</th>
         <th>Sucursal</th>
      </tr>
   </thead>
   <tbody>
     <?php $i=1; ?>
     @forelse($oc_medidas as $oc_medida)
      <tr>
         <th scope="row">{{$i}}</th>
         <td>
           {{$oc_medida->user->nombre}}
           <a  class="btn btn-info modal4 btn-xs" href="/ficha/{{$oc_medida->user->id}}/toma/{{$orden_corte->pedido->toma_medida->id}}">
             <i class="fa fa-eye" aria-hidden="true"></i>
           </a>
         </td>
         <td id="talla-{{$oc_medida->id}}-td">
           <a id="talla-{{$oc_medida->id}}-sup" href="javascript:editar_corte('talla-{{$oc_medida->id}}-sup')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->talla}}</a>
         </td>
         <td id="busto_pecho-{{$oc_medida->id}}-td">
            <a id="busto_pecho-{{$oc_medida->id}}-sup" href="javascript:editar_corte('busto_pecho-{{$oc_medida->id}}-sup')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->busto_pecho}}</a>

         </td>
         <td id="cintura-{{$oc_medida->id}}-td">
            <a id="cintura-{{$oc_medida->id}}-sup" href="javascript:editar_corte('cintura-{{$oc_medida->id}}-sup')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->cintura}}</a>

         </td>
         <td id="cadera-{{$oc_medida->id}}-td">
             <a id="cadera-{{$oc_medida->id}}-sup" href="javascript:editar_corte('cadera-{{$oc_medida->id}}-sup')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->cadera}}</a>
         </td>
         <td id="largo_manga-{{$oc_medida->id}}-td">
           <a id="largo_manga-{{$oc_medida->id}}-sup" href="javascript:editar_corte('largo_manga-{{$oc_medida->id}}-sup')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->largo_manga}}</a>
         </td>
         <td id="largo_total-{{$oc_medida->id}}-td">
           <a id="largo_total-{{$oc_medida->id}}-sup" href="javascript:editar_corte('largo_total-{{$oc_medida->id}}-sup')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->largo_total}}</a>

         </td>
         <td id="ancho_hombro-{{$oc_medida->id}}-td">
           <a id="ancho_hombro-{{$oc_medida->id}}-sup" href="javascript:editar_corte('ancho_hombro-{{$oc_medida->id}}-sup')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->ancho_hombro}}</a>

         </td>
         <td id="contorno_brazo-{{$oc_medida->id}}-td">
           <a id="contorno_brazo-{{$oc_medida->id}}-sup" href="javascript:editar_corte('contorno_brazo-{{$oc_medida->id}}-sup')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->contorno_brazo}}</a>
         </td>
         <td id="observaciones-{{$oc_medida->id}}-td">
           <a id="observaciones-{{$oc_medida->id}}-sup" href="javascript:editar_corte('observaciones-{{$oc_medida->id}}-sup')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->observaciones}}</a>
         </td>

         <td>{{$oc_medida->user->nombre_sucursal}}</td>
      </tr>
      <?php  $i++;?>
      @empty
      sin registros
      @endforelse
   </tbody>
</table>

@endif

@if($articulo->sup_inf=="inferior")

<table class="table table-condensed">
   <thead>
      <tr>
         <th>#</th>
         <th>Nombre Completo</th>
         <th>Talla</th>
         <th>Cintura</th>
         <th>Cadera</th>
         <th>Largo Total</th>
         <th>Tiro Delantero</th>
         <th>Tiro Trasero</th>
         <th>Tiro Completo</th>
         <th>Contorno Pierna</th>
         <th>Obs.</th>
         <th>Sucursal</th>
      </tr>
   </thead>
   <tbody>
     <?php $i=1; ?>
    @forelse($oc_medidas as $oc_medida)
      <tr>
         <th scope="row">{{$i}}</th>
         <td>
           <a  class="btn btn-info modal4 btn-xs" href="/ficha/{{$oc_medida->user->id}}/toma/{{$orden_corte->pedido->toma_medida->id}}" title="Ver Ficha" data-toggle="tooltip" data-placement="top">
             <i class="fa fa-eye" aria-hidden="true"></i>
           </a>
           {{$oc_medida->user->nombre}}
         </td>
         <td id="talla-{{$oc_medida->id}}-td">
           <a id="talla-{{$oc_medida->id}}-inf" href="javascript:editar_corte('talla-{{$oc_medida->id}}-inf')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->talla}}</a>
         </td>
         <td id="cintura-{{$oc_medida->id}}-td">
            <a id="cintura-{{$oc_medida->id}}-inf" href="javascript:editar_corte('cintura-{{$oc_medida->id}}-inf')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->cintura}}</a>

         </td>
         <td id="cadera-{{$oc_medida->id}}-td">
             <a id="cadera-{{$oc_medida->id}}-inf" href="javascript:editar_corte('cadera-{{$oc_medida->id}}-inf')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->cadera}}</a>
         </td>
         <td id="largo_total-{{$oc_medida->id}}-td">
           <a id="largo_total-{{$oc_medida->id}}-inf" href="javascript:editar_corte('largo_total-{{$oc_medida->id}}-inf')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->largo_total}}</a>
         </td>

         <td id="tiro_delantero-{{$oc_medida->id}}-td">
           <a id="tiro_delantero-{{$oc_medida->id}}-inf" href="javascript:editar_corte('tiro_delantero-{{$oc_medida->id}}-inf')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->tiro_delantero}}</a>
         </td>
         <td id="tiro_trasero-{{$oc_medida->id}}-td">
           <a id="tiro_trasero-{{$oc_medida->id}}-inf" href="javascript:editar_corte('tiro_trasero-{{$oc_medida->id}}-inf')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->tiro_trasero}}</a>
         </td>
         <td id="tipo_completo-{{$oc_medida->id}}-td">
           <a id="tipo_completo-{{$oc_medida->id}}-inf" href="javascript:editar_corte('tipo_completo-{{$oc_medida->id}}-inf')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->tipo_completo}}</a>
         </td>
         <td id="contorno_pierna-{{$oc_medida->id}}-td">
           <a id="contorno_pierna-{{$oc_medida->id}}-inf" href="javascript:editar_corte('contorno_pierna-{{$oc_medida->id}}-inf')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->contorno_pierna}}</a>
         </td>

         <td id="observaciones-{{$oc_medida->id}}-td">
           <a id="observaciones-{{$oc_medida->id}}-inf" href="javascript:editar_corte('observaciones-{{$oc_medida->id}}-inf')" title="clic para editar" data-toggle="tooltip" data-placement="top">{{$oc_medida->observaciones}}</a>
         </td>

         <td>{{$oc_medida->user->nombre_sucursal}}</td>
      </tr>
      <?php  $i++;?>
      @empty
      sin registros
      @endforelse
   </tbody>
</table>

@endif

</div>

@include('layouts.footer')
@endsection
