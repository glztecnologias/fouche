<div class="modal_cont">
  <form action="/actualiza_empleado/{{$empleado->id}}" method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label>Nombre Completo</label>
      <input type="text" name="nombre" class="form-control" value="{{$empleado->nombre}}" placeholder="Nombre" required>
    </div>

    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="{{$empleado->email}}" placeholder="Email" required>
    </div>

    <div class="form-group">
      <label>Rut</label>
      <input type="text" name="rut" id="rut" class="form-control" value="{{$empleado->rut}}" required oninput="checkRut(this)" placeholder="Ingrese RUT">
    </div>
    <div class="form-group">
      <label>Telefono</label>
      <input type="text" name="telefono" class="form-control" value="{{$empleado->telefono}}" placeholder="Telefono" required>
    </div>
    <div class="form-group">
      <label>Sexo</label>

      @if($empleado->sexo=="F" || $empleado->sexo=="f" )
      <label class="radio-inline">
          <input type="radio" name="sexo" id="inlineRadio1" value="f" checked="checked"><i class="fa fa-female" aria-hidden="true" required></i>
      </label>
      <label class="radio-inline">
          <input type="radio" name="sexo" id="inlineRadio2" value="m"> <i class="fa fa-male" aria-hidden="true"></i>
      </label>

      @elseif($empleado->sexo=="M" || $empleado->sexo=="m")
      <label class="radio-inline">
          <input type="radio" name="sexo" id="inlineRadio1" value="f" ><i class="fa fa-female" aria-hidden="true" required></i>
      </label>
      <label class="radio-inline">
          <input type="radio" name="sexo" id="inlineRadio2" value="m" checked="checked"> <i class="fa fa-male" aria-hidden="true"></i>
      </label>
      @else
      <label class="radio-inline">
          <input type="radio" name="sexo" id="inlineRadio1" value="F" ><i class="fa fa-female" aria-hidden="true" required></i>
      </label>
      <label class="radio-inline">
          <input type="radio" name="sexo" id="inlineRadio2" value="M" > <i class="fa fa-male" aria-hidden="true"></i>
      </label>
      @endif

    <div class="form-group">
      <label>Nombre Sucursal</label>
      <input type="text" name="nombre_sucursal" class="form-control" value="{{$empleado->nombre_sucursal}}" placeholder="Nombre de sucursal" required>
    </div>
    <div class="form-group">
      <label>Direccion Sucursal</label>
      <input type="text" name="direccion_sucursal" class="form-control" value="{{$empleado->direccion_sucursal}}" placeholder="Direccion de sucursal" required>
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>

  </form>
  <script type="text/javascript">
  $("#rut").rut({useThousandsSeparator : false});
  </script>
</div>
