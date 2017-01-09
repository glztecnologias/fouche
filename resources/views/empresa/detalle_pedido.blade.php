<div class="" style="margin:50px;">
  <h3><span class="label label-primary">Detalle de Pedido</span></h3>
  <br>
<ul>
  <li>Fecha Solicitud :<strong> {{$pedido->created_at}}<br></strong></li>
    <li>Orden de Compra Asociado : <strong>{{$pedido->orden_de_compra}}<br></strong></li>
    <li>Seccion:<strong> {{$pedido->seccion_empresa}}<br></strong></li>
    <li>Total Personas/Empleados : <strong>{{$pedido->total_empleados}}</strong></li>
</ul>
  <br>
  <table class="table table-condensed" id="data_empleados_toma">
  <thead>
    <tr>
      <th>id</th>
      <th>Nombre</th>
      <th>RUT</th>
      <th>Sucursal</th>

    </tr>
  </thead>
  <tbody>
  @foreach($empleados as $empleado)

    <tr class="success">
      <td>{{$empleado->id}}</td>
      <td>{{$empleado->nombre}}</td>
      <td>{{$empleado->rut}}</td>
      <td>{{$empleado->nombre_sucursal}}</td>
    </tr>
  @endforeach
  </tbody>


  </table>

</div>
