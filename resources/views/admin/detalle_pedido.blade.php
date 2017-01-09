<?php $seccion = 'admin'; ?>
<?php $pagina = 'pedidos'; ?>
@extends('dashboard')
@section('title','Administracion - Pedidos')
@section('content')

<h4><span class="label label-primary">Detalle Pedido</span></h4>
<ul>
  <li><p>Empresa : <strong class="text-uppercase">{{$pedido->empresa->nombre}}</strong></p></li>
  <li><p>Fecha y Hora : <strong class="text-uppercase"><?php setlocale(LC_ALL, "es_CL.UTF-8"); $fecha= $pedido->created_at; echo date_format($fecha,"d-m-Y  |  H:i:s"); ?></strong></p></li>
  <li><p>Seccion:<strong class="text-uppercase">{{$pedido->seccion_empresa}} </strong></p></li>
  <li><p>Orden de Compra: <strong class="text-uppercase">{{$pedido->orden_de_compra}}</strong></p></li>
</ul>

<br>
<table class="table table-condensed data-table">
   <thead>
      <tr>
         <th>#</th>
         <th>Nombre</th>
         <th>Rut</th>
         <th>Telefono</th>
         <th>Sucursal</th>
         <th>sexo</th>
         <th>Accion</th>
      </tr>
   </thead>
   <tbody>
     <?php $i=1; ?>
     @forelse($empleados as $empleado)
      <tr>
         <th scope="row">{{$i}}</th>
         <td>{{$empleado->nombre}}</td>
         <td>{{$empleado->rut}}</td>
         <td>{{$empleado->telefono}}</td>
         <td>{{$empleado->nombre_sucursal}}</td>
         <td>{{ $empleado->sexo == 'm' ? 'Masculino': 'Femenino' }}</td>
         <td>
           <a  class="btn btn-info modal4 btn-xs" href="/ficha/{{$empleado->id}}/toma/{{$toma_medida->id}}">
             <i class="fa fa-eye" aria-hidden="true"></i>
           </a>
           <!--<a class="btn btn-primary btn-xs" href="#">
             <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
           </a>
           <a class="btn btn-danger btn-xs" href="#">
             <i class="fa fa-trash" aria-hidden="true"></i>
           </a>-->
         </td>
      </tr>
      <?php  $i++;?>
      @empty
      sin registros
      @endforelse
   </tbody>
</table>


@include('layouts.footer')
@endsection
