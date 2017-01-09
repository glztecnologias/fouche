<div class="modal_cont">
  <form action="/admin/empresas/nueva" method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label>Nombre Empresa</label>
      <input type="text" name="nombre" class="form-control" value="" placeholder="Nombre">
    </div>
    <div class="form-group">
      <label>RUT</label>
      <input type="text" name="rut" class="form-control" value="" placeholder="Rut">
    </div>
    <div class="form-group">
      <label>Telefono</label>
      <input type="text" name="telefono" class="form-control" value="" placeholder="Telefono">
    </div>
    <div class="form-group">
      <label>Ciudad</label>
      <input type="text" name="ciudad" class="form-control" value="" placeholder="Ciudad">
    </div>
    <div class="form-group">
      <label>Direccion</label>
      <input type="text" name="direccion" class="form-control" value="" placeholder="Direccion">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" value="" placeholder="Email">
    </div>
    <div class="form-group">
      <label>Contraseña</label>
      <input type="password" name="password" class="form-control" value="" placeholder="Contraseña">
    </div>

    <button type="submit" class="btn btn-success">Crear Nuevo</button>

  </form>
</div>
