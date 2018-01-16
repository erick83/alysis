@extends('layout')

@section('content')
<div class="container" style="margin-top:30px">
  <form>
    <div class="form-group row">
      <label for="ganancia" class="col-sm-2 col-form-label">Producto</label>
      <div class="input-group col-sm-10">
        <input type="text" class="form-control" id="ganancia" value="">
      </div>
    </div>

    <button type="button" class="btn btn-default" style="margin-top: 10px">Vincular Servicio</button>
    <ul class="list-group">
      <li class="list-group-item">Diseño Gráfico General</li>
    </ul>

    <button type="button" class="btn btn-default" style="margin-top: 10px">Vincular Materiales</button>
    <ul class="list-group">
      <li class="list-group-item">Papel de sublimación</li>
    </ul>
    <button type="submit" class="btn btn-primary" style="margin-top: 10px">Guardar</button>    
  </form>

</div>

<script> $('#productos').addClass('active') </script>
@endsection