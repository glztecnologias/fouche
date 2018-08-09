<?php $seccion = 'empresa'; ?>
<?php $pagina = 'composturas'; ?>
@extends('dashboard')
@section('title','Empresa - Composturas')
@section('content')
<span class="label label-success titulo-sec">Composturas</span>
<br>
<a  class="btn btn-link" role="button" data-toggle="collapse" href="#ayuda2" aria-expanded="false" aria-controls="ayuda2"  title="Clic para ver ayuda..." >
  ¿Que puedo o debo hacer aqui?
</a>
<div class="collapse" id="ayuda2">
  <div class="well">
  <span class="label label-primary" style="font-size:15px;font-weight:bold;">1.- </span><br><br>
  ...
  <hr>
  <span class="label label-primary" style="font-size:15px;font-weight:bold;">2.- </span><br><br>
  ...
  <hr>
  </div>
</div>
<br>

<table class="table table-condensed table-bordered data-table" id="tabla-composturas">
   <thead>
      <tr>
        <th style="display:none">ID</th>
        <th>#</th>
         <th>Nombre Empleado</th>
         <th>Fecha Solicitud</th>
         <th>Prenda</th>
         <th>Error</th>
         <th>Comp. Solicitada</th>
         <th>Estado</th>
         <!--<th>Pedido Orden de Compra</th>
         <th>Pedido Fecha</th>-->
      </tr>
   </thead>

   <tbody>
     <?php $i=1;?>
     @forelse($composturas_empresa as $compostura)
      <tr>
        <td style="display:none;" class="id_compostura">{{$compostura->id}}</td>
        <td>{{$i}}
          <a class="btn btn-info btn-xs modal2" href="#" data-toggle="tooltip" data-placement="bottom" title="Ver detalle compostura">
            <i class="fa fa-eye" aria-hidden="true"></i>
          </a>
        </td>
        @if($compostura->users)
         <td>{{$compostura->users->nombre}}</td>
        @else
          <td> !! Usuario Borrado !!</td>
        @endif

         <td>{{$compostura->created_at}}</td>
         <td>{{ $compostura->prenda}}</td>
         <td>{{ $compostura->error_prenda }}</td>
         <td>{{ $compostura->compostura_solicitada }}</td>
         <td>
           @if($compostura->estado)
            @if($compostura->estado =="transito_a_fouche")
              <span class="label label-primary">"En transito a Fouche"</span><br>
              <span class="label label-default">Enviado el : {{$compostura->fecha_envio_a_fouche}}</span><br>
            @endif
            @if($compostura->estado =="en_fouche")
              <span class="label label-primary">"En Fouche"</span><br>
              <span class="label label-default">Llego el: {{$compostura->fecha_llegada_prenda}}</span><br>
              <span class="label label-default">Fecha aprox. Entrega: {{ $compostura->fecha_tope_entrega}}</span><br>
            @endif
            @if($compostura->estado =="transito_a_empresa")

            <span class="label label-primary">"En transito a empresa"</span>
            <a class="btn btn-danger btn-xs" href="javascript:cambia_estado({{$compostura->id}},'recibido')" data-toggle="tooltip" data-placement="bottom" title="Cambiar estado a Recibido">
              <i class="fa fa-level-down" aria-hidden="true"></i>
            </a>
            <br>
            <span class="label label-default">Enviado el: {{$compostura->fecha_envio_a_empresa}}</span><br>

            @endif

            @if($compostura->estado =="recibido")

            <span class="label label-primary">"Recibido en empresa"</span><br>
            <span class="label label-default">Enviado el: {{$compostura->fecha_recibido}}</span>

            @endif

           @else
           <span class="label label-primary">"Sin estado todavia"</span>
           <a class="btn btn-danger btn-xs" href="javascript:cambia_estado({{$compostura->id}},'transito_a_fouche')" data-toggle="tooltip" data-placement="bottom" title="Cambiar estado a Enviado">
             <i class="fa fa-paper-plane" aria-hidden="true"></i>
           </a>
           <br>

           @endif


         </td>

         <!--<td>{{ $compostura->pedido->orden_de_compra }}</td>
         <td>{{ $compostura->pedido->created_at }}</td>-->

      </tr>
      <?php $i++;?>
      @empty

      @endforelse
   </tbody>
</table>

@include('layouts.footer')
@endsection
