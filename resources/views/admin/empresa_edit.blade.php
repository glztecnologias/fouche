<div class="modal_cont">
  <form action="/actualiza_empresa/{{$empresa->id}}" method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label>Nombre Empresa</label>
      <input type="text" name="nombre" class="form-control" value="{{$empresa->nombre}}" placeholder="Nombre">
    </div>
    <div class="form-group">
      <label>RUT</label>
      <input type="text" name="rut" class="form-control" value="{{$empresa->rut}}" placeholder="Rut">
    </div>
    <div class="form-group">
      <label>Telefono</label>
      <input type="text" name="telefono" class="form-control" value="{{$empresa->telefono}}" placeholder="Telefono">
    </div>
    <div class="form-group">
      <label>Ciudad</label>
      <input type="text" name="ciudad" class="form-control" value="{{$empresa->ciudad}}" placeholder="Ciudad">
    </div>
    <div class="form-group">
      <label>Direccion</label>
      <input type="text" name="direccion" class="form-control" value="{{$empresa->direccion}}" placeholder="Direccion">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" value="{{$empresa->email}}" placeholder="Email">
    </div>
    <div class="form-group">
      <label>Contraseña</label>
      <input type="password" name="password" class="form-control" value="{{$empresa->password}}" placeholder="Contraseña">
    </div>

    <button type="submit" class="btn btn-success">Guardar Cambios</button>

  </form>
</div>
