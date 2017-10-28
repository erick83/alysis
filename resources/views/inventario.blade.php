@extends('layout')

@section('content')
<div class="container" style="margin-top:30px">
  <form>
    <div class="form-group row">
      <label for="item" class="offset-sm-3 col-sm-2 col-form-label">Consumible</label>
      <div class="col-sm-4">
        <select class="form-control" id="item">
          @foreach ($materiales as $item)
          <option value="{{$item['id']}}">{{$item['material']}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="factura" class="offset-sm-3 col-sm-2 col-form-label">Factura</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="factura" placeholder="Nro de factura">
      </div>
    </div>
    <div class="form-group row">
      <label for="precio" class="offset-sm-3 col-sm-2 col-form-label">Precio</label>
      <div class="col-sm-2 input-group">
        <span class="input-group-addon" id="basic-addon2">Bs.</span>
        <input type="text" class="form-control" id="precio" value="">
      </div>
    </div>
    <div class="form-group row">
      <label for="cantidad" class="offset-sm-3 col-sm-2 col-form-label">Cantidad</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="cantidad" value="">
      </div>
    </div>
    <div class="offset-sm-5 col-sm-3">
      <button type="submit" class="btn btn-primary">Agregar al Inventario</button>    
    </div>
  </form>
</div>

<script> $('#inventario').addClass('active') </script>
@endsection