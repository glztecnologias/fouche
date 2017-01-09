<div class="" style="margin:25px;">
  <h4><span class="label label-primary">Toma de Medida</span></h4>
  <br>
  <ul>
    <li>Codigo : <strong>{{$toma_medida->codigo_acceso}}</strong><br></li>
    <li>Fecha de Creacion : <strong>{{$toma_medida->created_at}}</strong><br></li>
  </ul>



  <br>
  <table class="table table-condensed" id="data_empleados_toma">
  <thead>
    <tr>
      <th>id</th>
      <th>Nombre</th>
      <th>RUT</th>
      <th>Sucursal</th>
      <th>Estado</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
  @if($user->toma_check=="LISTO")
    <tr class="success">
      <td>{{$user->id}}</td>
      <td>{{$user->nombre}}</td>
        <td>{{$user->rut}}</td>
      <td>{{$user->nombre_sucursal}}</td>
      <td >
        {{$user->toma_check}}
      </td>
    </tr>
  @else
  <tr class="danger">
    <td>{{$user->id}}</td>
    <td>{{$user->nombre}}</td>
      <td>{{$user->rut}}</td>
    <td>{{$user->nombre_sucursal}}</td>
    <td >
      {{$user->toma_check}}
    </td>
  </tr>
  @endif
  @endforeach
  </tbody>


  </table>

</div>
