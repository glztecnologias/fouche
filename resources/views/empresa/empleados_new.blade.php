<div class="modal_cont">
  <form action="/empresa/empleados/nuevo" method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label>Nombre Completo</label>
      <input type="text" name="nombre" class="form-control" value="" placeholder="Nombre" required>
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="" placeholder="Email" required>
    </div>

    <div class="form-group">
      <label>Rut</label>
      <input type="text" name="rut" id="rut" class="form-control" value="" required oninput="checkRut(this)" placeholder="Ingrese RUT">
    </div>
    <div class="form-group">
      <label>Telefono</label>
      <input type="text" name="telefono" class="form-control" value="" placeholder="Telefono" required>
    </div>
    <div class="form-group">
      <label>Sexo</label>
      <label class="radio-inline">
          <input type="radio" name="sexo" id="inlineRadio1" value="f"><i class="fa fa-female" aria-hidden="true" required></i>
      </label>
      <label class="radio-inline">
          <input type="radio" name="sexo" id="inlineRadio2" value="m"> <i class="fa fa-male" aria-hidden="true"></i>
      </label>
    </div>
    <div class="form-group">
      <label>Nombre Sucursal</label>
      <input type="text" name="nombre_sucursal" class="form-control" value="" placeholder="Nombre de sucursal" required>
    </div>
    <div class="form-group">
      <label>Direccion Sucursal</label>
      <input type="text" name="direccion_sucursal" class="form-control" value="" placeholder="Direccion de sucursal" required>
    </div>

    <button type="submit" class="btn btn-success">Crear Nuevo</button>

  </form>
<script type="text/javascript">
$("#rut").rut({useThousandsSeparator : false});
</script>
</div>
