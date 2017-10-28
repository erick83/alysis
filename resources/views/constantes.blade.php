@extends('layout')

@section('content')
<div class="container" style="margin-top:30px">
  <form>
    <div class="form-group row">
      <label for="ganancia" class="col-sm-4 col-form-label">{{ $data[0]['constante']}}</label>
      <div class="input-group col-sm-2">
        <input type="text" class="form-control" id="ganancia" value="{{ $data[0]['value']}}">
        <span class="input-group-addon" id="basic-addon1">%</span>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-4 col-form-label">{{ $data[1]['constante']}}</label>
      <div class="input-group col-sm-2">
        <input type="text" class="form-control" id="inputPassword" value="{{ $data[1]['value']}}">
        <span class="input-group-addon" id="basic-addon2">%</span>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>    
  </form>
</div>

<script> $('#constantes').addClass('active') </script>
@endsection