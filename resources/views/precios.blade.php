@extends('layout')

@section('content')
<div class="container" style="margin-top: 30px">
  <form id="myForm" method="post">
    <div class="form-group row">
      <label for="item" class="offset-sm-3 col-sm-2 col-form-label">Producto</label>
      <div class="col-sm-4">
        <select class="form-control" id="item">
          @foreach ($productos as $item)
          <option value="{{$item['id']}}">{{$item['producto']}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#servicioModal">Agregar Servicio</button>
    <table class="table" id="servicios">
      <thead>
        <th>Servicio</th>
        <th>Precio</th>
        <th>Unidad</th>
        <th>Cantidad</th>
        <th></th>
      </thead>
      <tbody>

      </tbody>
    </table>

    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#consumibleModal">Agregar Consumible</button>
    <table class="table" id="materiales">
      <thead>
        <th>Consumible</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th></th>
      </thead>
      <tbody>
        
      </tbody>
    </table>

    <button id="calcular" type="submit" class="btn btn-primary">Calcular</button>
  </form>


  <div class="alert alert-info" role="alert" style="margin-top: 10px">
    El resultado es <strong>Bs. </strong>
  </div>
</div>

<div id="hola"></div>




{{--  Modals  --}}
<div class="modal fade" id="servicioModal" tabindex="-1" role="dialog" aria-labelledby="servicioModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="servicioModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <select class="form-control" id="servicioItem">
          @foreach ($servicios as $item)
          <option value="{{$item['id']}}">{{$item['servicio']}}</option>
          @endforeach
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="agregarServicio" data-dismiss="modal">Agregar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="consumibleModal" tabindex="-1" role="dialog" aria-labelledby="consumibleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="consumibleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <select class="form-control" id="materialItem">
          @foreach ($materiales as $item)
          <option value="{{$item['id']}}">{{$item['material']}}</option>
          @endforeach
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="agregarMaterial" data-dismiss="modal">Agregar</button>
      </div>
    </div>
  </div>
</div>


<script>
  var servicios = [],
      materiales = [];
  $('#precios').addClass('active');
  
  $('#agregarServicio').on('click', function() {
    $.get('/servicio/' + $('#servicioItem').val(), function(data) {
      servicios = [...servicios, data];
      $('#servicios tbody').append('<tr id="servicio_' + data.id + '"><td>' + data.servicio + '</td><td>' + data.precio + '</td><td>' + data.unidad + '</td><td><input type="text" id="servicio_cantidad_'+ data.id +'" class="form-control"></td><td><a href="#">Eliminar</a></td></tr>');
    });
  });

  $('#agregarMaterial').on('click', function() {
    var item = $('#materialItem').val();
    var children = $('#materialItem').children();

    $.get('/material/' + item, function(data) {
      data = {...data[0], material: children[item - 1].innerText};
      materiales = [...materiales, data];
      $('#materiales tbody').append('<tr id="material_' + data.id + '"><td>' + data.material + '</td><td>' + data.precio + '</td><td><input type="text" id="material_cantidad_'+ data.id +'" class="form-control"></td><td><a href="#">Eliminar</a></td></tr>');
    });
  });


  $('#calcular').on('click', function(e) {
    e.preventDefault();
      
  })

</script>

@endsection