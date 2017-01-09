<?php $seccion = 'admin'; ?>
<?php $pagina = 'composturas'; ?>
@extends('dashboard')
@section('title','Administracion - Composturas')
@section('content')
<h4><span class="label label-primary">Composturas</span></h4>
<table class="table table-condensed data-table">
   <thead>
      <tr>
        <th>#</th>
        <th>Empresa</th>
         <th>Nombre Empleado</th>
         <th>Fecha Solicitud</th>
         <th>Prenda</th>
         <th>Error</th>
         <th>Compostura Solicitada</th>
         <th>Pedido Orden de Compra</th>
         <th>Pedido Fecha</th>
         <th>Acciones</th>
      </tr>
   </thead>
   <tbody>
     <?php $i=1; ?>
     @forelse($composturas as $compostura)
  <tr>
         <th scope="row">{{$i}}</th>
         @if($compostura->users)
         <td>{{$compostura->users->empresa->nombre}}</td>
         <td>{{$compostura->users->nombre}}</td>
         @else
         <td>!!usuario Eliminado</td>
         <td>!!usuario Eliminado</td>
         @endif


         <td>{{$compostura->created_at}}</td>
         <td>{{$compostura->prenda}}</td>
         <td>{{$compostura->error_prenda}}</td>
         <td>{{$compostura->compostura_solicitada}}</td>
         <td>{{$compostura->pedido->orden_de_compra}}</td>
         <td>{{$compostura->pedido->created_at}}</td>
         <td>
           <a class="btn btn-info btn-xs" href="#">
             <i class="fa fa-eye" aria-hidden="true"></i>
           </a>
           <a class="btn btn-primary btn-xs" href="#">
             <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
           </a>
           <a class="btn btn-danger btn-xs" href="#">
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
