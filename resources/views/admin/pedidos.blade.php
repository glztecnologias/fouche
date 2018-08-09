<?php $seccion = 'admin'; ?>
<?php $pagina = 'pedidos'; ?>
@extends('dashboard')
@section('title','Administracion - Pedidos')
@section('content')

<h4><span class="label label-primary">Pedidos</span></h4>


<table class="table table-condensed data-table">
   <thead>
      <tr>
         <th>#</th>
         <th>Empresa</th>
         <th>Fecha</th>
         <th>Cantidad</th>
         <th>N° Orden Compra</th>
         <th>Accion</th>
      </tr>
   </thead>
   <tbody>
     <?php $i=1; ?>
     @forelse($pedidos as $pedido)
      <tr>
         <th scope="row">{{$i}}</th>
         <td>{{$pedido->empresa->nombre}}</td>
         <td>{{$pedido->created_at}}</td>
         <td>{{$pedido->total_empleados}}</td>
         <td>{{$pedido->orden_de_compra}}</td>
         <td>
           <a class="btn btn-info btn-xs" href="/admin/pedidos/{{$pedido->id}}" title="Ver detalle del Pedido" data-toggle="tooltip" data-placement="top">
             <i class="fa fa-eye" aria-hidden="true"></i>
           </a>
           <!--
           @if(!$pedido->orden_corte->isEmpty())
           <span title="Orden de Corte Generada!" data-toggle="tooltip" data-placement="top">
           <a class="btn btn-primary btn-xs modalx  disabled" href="#"  title="Orden de Corte Generada!" data-toggle="tooltip" data-placement="top">
             <i class="fa fa-scissors" aria-hidden="true"></i>
           </a>
           </span>
           @else
           <a class="btn btn-primary btn-xs modalx" href="/nuevo_orden_corte/{{$pedido->id}}" title="Generar Orden de Corte!" data-toggle="tooltip" data-placement="top">
             <i class="fa fa-scissors" aria-hidden="true"></i>
           </a>
           @endif
            -->

           <!--<a class="btn btn-danger btn-xs" href="#">
             <i class="fa fa-trash" aria-hidden="true"></i>
           </a>-->
         </td>
      </tr>
      <?php $i++; ?>
      @empty
      @endforelse
   </tbody>
</table>



@include('layouts.footer')
@endsection
