<?php $seccion = 'admin'; ?>
<?php $pagina = 'composturas'; ?>
@extends('dashboard')
@section('title','Administracion - Composturas')
@section('content')
<h4><span class="label label-primary">Composturas</span></h4>
<table class="table table-condensed table-bordered data-table">
   <thead>
      <tr>
        <th>#</th>
        <th>Fecha</th>
        <th>Empresa</th>
         <th>Empleado</th>
         <th>Prenda</th>
         <th>Color</th>
         <th>Error</th>
         <th>Compostura Solicitada</th>
         <!--<th>Estado</th>-->
         <th>Acciones</th>
      </tr>
   </thead>
   <tbody>
     <?php $i=1; ?>
     @forelse($composturas as $compostura)
  <tr>
         <td scope="row">{{$i}}</td>
         <td>{{$compostura->created_at}}</td>
         @if($compostura->users)
         <td>{{$compostura->users->empresa->nombre}}</td>
         <td>
             <span class="label label-primary">{{$compostura->users->nombre}}</span><br>
             <span class="label label-info">{{$compostura->users->email}}</span><br>
             <span class="label label-info">{{$compostura->users->telefono}}</span><br>

         </td>
         @else
         <td>!!usuario Eliminado</td>
         <td>!!usuario Eliminado</td>
         @endif



         <td>{{$compostura->prenda}}</td>
         <td>{{$compostura->color}}</td>
         <td>{{$compostura->error_prenda}}</td>
         <td>{{$compostura->compostura_solicitada}}</td>
         <td><a  class="btn btn-info modal4 btn-xs" href="/ficha/{{$compostura->users->id}}/toma/{{$compostura->pedido->toma_medida->id}}"><i class="fa fa-eye" aria-hidden="true"></i> Medidas Anteriores</a></td>

         <!--<td>{{$compostura->pedido->orden_de_compra}}</td>
         <td>{{$compostura->pedido->created_at}}</td>-->
         <!--<td>

           @if($compostura->estado)
            @if($compostura->estado =="transito_a_fouche")

              <span class="label label-primary">"En transito a Fouche"</span><br>
              <span class="label label-default">Enviado el : {{$compostura->fecha_envio_a_fouche}}</span><br>
              <a class="btn btn-primary btn-xs" href="javascript:cambia_estado_admin({{$compostura->id}},'en_fouche')" data-toggle="tooltip" data-placement="bottom" title="Cambiar estado a Llego!">
                <i class="fa fa-level-down" aria-hidden="true"></i>
              </a>
            @endif
            @if($compostura->estado =="en_fouche")
              <span class="label label-primary">"En Fouche"</span><br>
              <span class="label label-default">Llego el: {{$compostura->fecha_llegada_prenda}}</span><br>
              <span class="label label-default">Fecha aprox. Entrega: {{ $compostura->fecha_tope_entrega}}</span><br>
              <a class="btn btn-primary btn-xs" href="javascript:cambia_estado_admin({{$compostura->id}},'transito_a_empresa')" data-toggle="tooltip" data-placement="bottom" title="Cambiar estado: Enviado a Empresa">
                <i class="fa fa-level-up" aria-hidden="true"></i>
              </a>

            @endif
            @if($compostura->estado =="transito_a_empresa")

            <span class="label label-primary">"En transito a empresa"</span><br>
            <span class="label label-default">Enviado el: {{$compostura->fecha_envio_a_empresa}}</span><br>

            @endif

            @if($compostura->estado =="recibido")

            <span class="label label-primary">"Recibido en empresa"</span><br>
            <span class="label label-default">Enviado el: {{$compostura->fecha_recibido}}</span><br>

            @endif

           @else
           <span class="label label-primary">"Sin estado todavia"</span><br>
           <a class="btn btn-primary btn-xs" href="javascript:cambia_estado_admin({{$compostura->id}},'en_fouche')" data-toggle="tooltip" data-placement="bottom" title="Cambiar estado a Llego!">
             <i class="fa fa-paper-down" aria-hidden="true"></i>
           </a>
           @endif


       </td>-->

      </tr>
      <?php $i++; ?>
      @empty
      @endforelse
   </tbody>
</table>
@include('layouts.footer')
@endsection
