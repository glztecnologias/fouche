<div class="modal_cont">
  <form action="/admin/articulo/nuevo" method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label>Nombre Articulo</label>
      <input type="text" name="nombre" class="form-control" value="" placeholder="Nombre">
    </div>
    <div class="form-group">
      <label>Codigo</label>
      <input type="text" name="codigo" class="form-control" value="" placeholder="Codigo">
    </div>

    <div class="form-group">
      <label>Zona (Superior / Inferior)</label>
      <select class="form-control" name="sup_inf">
        <option value="superior">Superior</option>
        <option value="inferior">Inferior</option>
      </select>
    </div>

    <button type="submit" class="btn btn-success">Crear Nuevo</button>

  </form>
</div>
