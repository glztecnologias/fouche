<?php $seccion = 'empresa'; ?>
<?php $pagina = 'composturas'; ?>
@extends('dashboard')
@section('title','Empresa - Composturas')
@section('content')
<span class="label label-success titulo-sec">Composturas</span>
<br><br>

<table class="table table-condensed data-table" id="tabla-composturas">
   <thead>
      <tr>
        <th style="display:none">ID</th>
        <th>#</th>
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
     <?php $i=1;?>
     @forelse($composturas_empresa as $compostura)
      <tr>
        <td style="display:none;" class="id_compostura">{{$compostura->id}}</td>
        <td>{{$i}}</td>
        @if($compostura->users)
         <td>{{$compostura->users->nombre}}</td>
        @else
          <td> !! Usuario Borrado !!</td>
        @endif

         <td>{{$compostura->created_at}}</td>
         <td>{{ $compostura->prenda}}</td>
         <td>{{ $compostura->error_prenda }}</td>
         <td>{{ $compostura->compostura_solicitada }}</td>
         <td>{{ $compostura->pedido->orden_de_compra }}</td>
         <td>{{ $compostura->pedido->created_at }}</td>
         <td>

         </td>
      </tr>
      <?php $i++;?>
      @empty

      @endforelse
   </tbody>
</table>

@include('layouts.footer')
@endsection
