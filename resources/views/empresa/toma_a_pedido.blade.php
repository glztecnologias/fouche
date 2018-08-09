

<div class=""  style="margin:50px;">

<h3><span class="label label-primary">Resumen</span></h3>
  <ul>
    <li>Toma de Medida ID :: <strong>{{$toma_medida->id}}</strong><br></li><br>
    <li>Estado Actual ::<strong class="text-uppercase"> {{$toma_medida->estado}}</strong><br></li><br>
    <li>Fecha de Creacion ::<strong> {{$toma_medida->created_at}}</strong><br></li><br>
    <li>Cantidad de Empleados Seleccionados :: <strong>{{$toma_medida->medida->count()}}</strong><br></li><br>
    <li>% Completacion :: <strong>{{$toma_medida->medida->count()*100/$toma_medida->seleccion->count()}} %</strong><br></li><br>
  </ul>

  <h3 ><span class="label label-primary">Datos de Pedido</span></h3>
  <form class=""  method="post">
    <input type="hidden" id="id_toma" value="{{$toma_medida->id}}">
    <label for="orden_compra">N° Orden de Compra Asociado</label>
    <input type="text" id="orden_compra" value="" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Ingresa Orden de Compra Asociado." placeholder="Orden de Compra"><br>
    <a  class="btn btn-success" href="javascript:crear_pedido()">Enviar Pedido</a>
  </form>
</div>
