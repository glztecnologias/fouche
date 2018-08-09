<div class="modal_cont">
  <form action="/actualiza_orden_corte/{{$orden_corte->id}}" method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <ul>
      <li>Empresa: {{$orden_corte->pedido->empresa->nombre}}</li>
      <li>Seccion : {{$orden_corte->pedido->seccion_empresa}}</li>
      <li>Orden de Compra : {{$orden_corte->pedido->orden_de_compra}}</li>
    </ul>

    <div class="form-group">
      <label>Elige Articulo</label>
      <select class="form-control" name="prendas_id">
      @forelse($articulos as $articulo)
        @if($articulo->id == $orden_corte->prendas_id)
          <option value="{{$articulo->id}}" selected="selected">{{ $articulo->codigo }}  -  {{$articulo->nombre}}</option>
        @else
          <option value="{{$articulo->id}}" >{{ $articulo->codigo }}  -  {{$articulo->nombre}}</option>
        @endif
      @empty
       no existen articulos todavia...
      @endforelse
      </select>
    </div>

    <div class="form-group">
      <label>Tela</label>
      <input type="text" name="tela" class="form-control" value="{{$orden_corte->tela}}" placeholder="Tela">
    </div>

    <div class="form-group">
      <label>Tela Aplicacion</label>
      <input type="text" name="tela_aplicacion" class="form-control" value="{{$orden_corte->tela_aplicacion}}" placeholder="Tela Aplicacion">
    </div>

    <div class="form-group">
      <label>Forro</label>
      <input type="text" name="forro" class="form-control" value="{{$orden_corte->forro}}" placeholder="Forro">
    </div>

    <div class="form-group">
      <label>Fusionado</label>
      <input type="text" name="fusionado" class="form-control" value="{{$orden_corte->fusionado}}" placeholder="Fusionado">
    </div>

    <div class="form-group">
      <label>Color Tela</label>
      <input type="text" name="color_tela" class="form-control" value="{{$orden_corte->color_tela}}" placeholder="Color Tela">
    </div>

    <button type="submit" class="btn btn-success">
      <i class="fa fa-scissors" aria-hidden="true"></i> Actualizar Orden de Corte</button>

  </form>
</div>
