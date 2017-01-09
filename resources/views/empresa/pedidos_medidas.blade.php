<?php $seccion = 'empresa'; ?>
<?php $pagina = 'pedidos_medidas'; ?>
@extends('dashboard')
@section('title','Empresa - Pedidos')
@section('content')

<div class="row">
  <div class="col-md-6" style="border-right:1px dotted grey;">
    <span class="label label-success titulo-sec">Toma de Medidas</span><br>
    <table class="table table-condensed data-table-tmedida">
       <thead>
          <tr>
            <th style="display:none">ID</th>
             <th>#</th>
             <th>Codigo</th>
             <th>Fecha</th>
             <!--<th>Fecha Cierre</th>-->
             <th>% Toma Medidas</th>
             <th>Acciones</th>
          </tr>
       </thead>
       <tbody>
         <?php $i=1;?>
         @forelse($toma_medida as $toma)
          <tr>
            <td style="display:none;" class="id_empleado">{{$toma->id}}</td>
             <th scope="row">{{$i}}</th>
             <td>{{$toma->codigo_acceso}}</td>
             <td>{{$toma->created_at}}</td>
             <!--<td>{{$toma->fecha_cierre}}</td>-->
             <td>
              <strong> @if($toma->seleccion->count()==0)
               0
               @else
               {{$toma->medida->count()*100/$toma->seleccion->count() }}
               @endif
               % </strong>&nbsp;&nbsp;&nbsp;    {{$toma->medida->count()}}  de  {{$toma->seleccion->count()}}
             </td>
             <td>
               @if($toma->seleccion->count()==$toma->medida->count())
               @if($toma->seleccion->count()>0)
               <a class="btn btn-success btn-xs modal2" href="/toma_a_pedido/{{$toma->id}}">
                 <i class="fa fa-hand-o-up" aria-hidden="true"></i>
               </a>
               @endif
               @endif
               <a class="btn btn-info btn-xs modal2" href="/detalle_toma_medida/{{$toma->id}}" title="Ver Detalle">
                 <i class="fa fa-eye" aria-hidden="true"></i>
               </a>
               <a class="btn btn-primary btn-xs modal2" href="/edita_toma_medida/{{$toma->id}}" title="Editar">
                 <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
               </a>
               <a class="btn btn-danger btn-xs" href="javascript:elimina_recurso('{{$toma->id}}','/elimina_toma_medida')" title="Eliminar">
                 <i class="fa fa-trash" aria-hidden="true"></i>
               </a>
             </td>
          </tr>
          <?php $i++;?>
          @empty

          @endforelse
       </tbody>
    </table>

  </div>
  <div class="col-md-6">
    <span class="label label-success titulo-sec">Pedidos</span><br>
    <table class="table table-condensed data-table-tmedida">
      <thead>

        <tr>
           <th>#</th>
           <th>Seccion</th>
           <th>N° Orden Compra</th>
           <th>Fecha Envio</th>
           <th>Acciones</th>
        </tr>

      </thead>
      <tbody>
        <?php $i=1;?>
        @forelse($pedidos as $pedido)
        <tr>
           <th scope="row">{{$i}}</th>
           <td>{{$pedido->seccion_empresa}}</td>
           <td>{{$pedido->orden_de_compra}}</td>
           <td>{{$pedido->created_at}}</td>
           <td>
             <a class="btn btn-warning btn-xs modalx3" href="/solicitud_compostura/{{$pedido->id}}">
              <i class="fa fa-scissors" aria-hidden="true"></i>
             </a>
             <a class="btn btn-info btn-xs modal2" href="/detalle_pedido/{{$pedido->id}}">
               <i class="fa fa-eye" aria-hidden="true"></i>
             </a>
           </td>
        </tr>
        <?php $i++;?>
        @empty

        @endforelse
      </tbody>
    </table>
  </div>
</div>


<hr>
<!--           LEYENDAS            -->
  <p style="float:right;">Leyenda:
      <a class="btn btn-danger btn-xs">
      <i class="fa fa-trash" aria-hidden="true"></i></a> Eliminar
      <a class="btn btn-primary btn-xs ">
      <i class="fa fa-pencil-square-o" aria-hidden="true" ></i></a> Editar
      <a class="btn btn-info btn-xs ">
      <i class="fa fa-eye" aria-hidden="true" ></i></a> Ver Detalle
      <a class="btn btn-success btn-xs ">
      <i class="fa fa-hand-o-up" aria-hidden="true" ></i></a> Enviar a Fouche *
      <a class="btn btn-warning btn-xs ">
      <i class="fa fa-scissors" aria-hidden="true" ></i></a> Solicitar Compostura *
  </p>
<!--          ##########           -->
<br>
<hr>

@include('layouts.footer')
@endsection
