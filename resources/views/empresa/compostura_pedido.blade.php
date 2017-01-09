


<div class="" style="margin:30px;width:700px;">
  <h3><span class="label label-primary">Solicitud Compostura</span></h3>
  <br>
  <form class="form-horizontal" method="post" action="/crea_compostura">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="id_pedido" value="{{$pedido->id}}">
  <div class="form-group">
    <label for="usuario" class="col-sm-2 control-label">Selecciona Usuario</label>
    <div class="col-sm-10">
    <select class="form-control"  id="usuario" name="usuario">
      @foreach($empleados as $empleado)
      <option value="{{$empleado->id}}">{{ $empleado->nombre}}  -  {{ $empleado->rut }}</option>
      @endforeach
    </select>
    </div>
</div>

    <div class="form-group">
      <label for="prenda" class="col-sm-2 control-label">Prenda</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="prenda" name="prenda" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="color" class="col-sm-2 control-label">Color</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="color" name="color" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="error" class="col-sm-2 control-label">Error Prenda</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="error" name="error" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="compostura_solicitada" class="col-sm-2 control-label">Arreglo Solicitado</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="compostura_solicitada" name="compostura_solicitada" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Enviar Compostura</button>
      </div>
    </div>
  </form>

</div>
