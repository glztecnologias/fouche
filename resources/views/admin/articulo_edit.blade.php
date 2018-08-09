<div class="modal_cont">
  <form action="/actualiza_articulo/{{$prenda->id}}" method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label>Nombre Articulo</label>
      <input type="text" name="nombre" class="form-control" value="{{$prenda->nombre}}" placeholder="Nombre">
    </div>
    <div class="form-group">
      <label>Codigo</label>
      <input type="text" name="codigo" class="form-control" value="{{$prenda->codigo}}" placeholder="Codigo">
    </div>

    <div class="form-group">
      <label>Zona (Superior / Inferior)</label>
      <select class="form-control" name="sup_inf">
        @if($prenda->sup_inf =='superior')
        <option value="superior" selected="selected">Superior</option>
        <option value="inferior">Inferior</option>
        @endif
        @if($prenda->sup_inf =='inferior')
        <option value="superior" >Superior</option>
        <option value="inferior" selected="selected">Inferior</option>
        @endif
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>

  </form>
</div>
