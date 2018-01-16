@extends('layout')

@section('content')
<div class="container" style="margin-top:30px">
  <form>
    <div class="form-group row">
      <label for="ganancia" class="offset-sm-3 col-sm-2 col-form-label">Servicio</label>
      <div class="input-group col-sm-3">
        <input type="text" class="form-control" id="ganancia" value="">
      </div>
    </div>

    <div class="form-group row">
      <label for="ganancia" class="offset-sm-3 col-sm-2 col-form-label">Precio</label>
      <div class="input-group col-sm-3">
        <input type="text" class="form-control" id="ganancia" value="">
      </div>
    </div>
    
    <div class="form-group row">
      <label for="ganancia" class="offset-sm-3 col-sm-2 col-form-label">Unidad</label>
      <div class="input-group col-sm-3">
        <input type="text" class="form-control" id="ganancia" value="">
      </div>
    </div>
    <div class="row">
      <div class="offset-sm-5 col-sm-2">
        <button type="submit" class="btn btn-primary" style="margin-top: 10px">Guardar</button>    
      </div>
    </div>
  </form>
</div>

<script> $('#servicios').addClass('active') </script>
@endsection