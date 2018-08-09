<?php $seccion = 'admin'; ?>
<?php $pagina = 'ordenes_corte'; ?>
@extends('dashboard')
@section('title','Administracion - Ordenes Corte')
@section('content')
<h4><span class="label label-primary">Ordenes de Corte</span></h4>
<table class="table table-condensed data-table">
   <thead>
      <tr>
        <th>#</th>
        <th>Empresa</th>
         <th>Seccion</th>
         <th>Articulo</th>
         <th>N° Orden Compra</th>
         <th>Total Orden Corte</th>
         <th>Datos Tela</th>
         <th>Acciones</th>
      </tr>
   </thead>
   <tbody>
<?php $i=1; ?>
@forelse($ordenes_corte as $orden)
  <tr>
         <th scope="row">{{$i}}</th>
         <td>{{$orden->pedido->empresa->nombre}}</td>
         <td>{{$orden->pedido->seccion_empresa}}</td>
         <td>{{$orden->prenda->codigo}}</td>
         <td>{{$orden->pedido->orden_de_compra}}</td>
         <td>{{$orden->total_orden_corte}}</td>
         <td>
           <ul>
             <li>Tela: {{$orden->tela}}</li>
             <li>Tela Aplicacion: {{$orden->tela_aplicacion}}</li>
             <li>Forro: {{$orden->forro}}</li>
             <li>Fusionado: {{$orden->fusionado}}</li>
             <li>Color: {{$orden->color_tela}}</li>
           </ul>
         </td>
         <td>
           <a class="btn btn-info btn-xs" href="/admin/orden_lista/{{$orden->id}}" title="Ingresar Medidas para folio" data-toggle="tooltip" data-placement="top">
             <i class="fa fa-bars" aria-hidden="true"></i>
           </a>
           <a class="btn btn-primary btn-xs modalx" href="/edita_orden_corte/{{$orden->id}}" title="Editar Orden de Corte" data-toggle="tooltip" data-placement="top">
             <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
           </a>
           <a class="btn btn-danger btn-xs" href="javascript:elimina_recurso({{{$orden->id}}},'/elimina_orden_corte')" title="Eliminar Orden de Corte" data-toggle="tooltip" data-placement="top">
             <i class="fa fa-trash" aria-hidden="true"></i>
           </a>
         </td>
      </tr>
<?php $i++; ?>
@empty

@endforelse
   </tbody>
</table>
@include('layouts.footer')
@endsection
