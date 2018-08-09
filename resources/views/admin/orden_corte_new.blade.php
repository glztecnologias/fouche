<div class="modal_cont">
  <form action="/admin/orden_corte/nuevo" method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <ul>
      <li>Empresa: {{$pedido->empresa->nombre}}</li>
      <li>Seccion : {{$pedido->seccion_empresa}}</li>
      <li>Orden de Compra : {{$pedido->orden_de_compra}}</li>
    </ul>
    <input type="hidden" name="pedidos_id" value="{{$pedido->id}}">
    <input type="hidden" name="total_orden_corte" value="{{$pedido->total_empleados}}">

    <div class="form-group">
      <label>Elige Articulo</label>
      <select class="form-control" name="prendas_id">
      @forelse($articulos as $articulo)
        <option value="{{$articulo->id}}">{{ $articulo->codigo }}  -  {{$articulo->nombre}}</option>
      @empty
       no existen articulos todavia...
      @endforelse
      </select>
    </div>

    <div class="form-group">
      <label>Tela</label>
      <input type="text" name="tela" class="form-control" value="" placeholder="Tela">
    </div>

    <div class="form-group">
      <label>Tela Aplicacion</label>
      <input type="text" name="tela_aplicacion" class="form-control" value="" placeholder="Tela Aplicacion">
    </div>

    <div class="form-group">
      <label>Forro</label>
      <input type="text" name="forro" class="form-control" value="" placeholder="Forro">
    </div>

    <div class="form-group">
      <label>Fusionado</label>
      <input type="text" name="fusionado" class="form-control" value="" placeholder="Fusionado">
    </div>

    <div class="form-group">
      <label>Color Tela</label>
      <input type="text" name="color_tela" class="form-control" value="" placeholder="Color Tela">
    </div>

    <button type="submit" class="btn btn-success">
      <i class="fa fa-scissors" aria-hidden="true"></i> Generar Orden de Corte</button>

  </form>
</div>
