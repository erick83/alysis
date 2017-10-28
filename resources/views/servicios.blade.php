@extends('layout')

@section('content')
<div class="container" style="margin-top:30px">
  <table class="table">
    <thead>
      <th>id</th>
      <th>Servicio</th>
      <th>Precio</th>
      <th>Unidad</th>
    </thead>
    <tbody>
      @foreach($servicios as $servicio)
      <tr>
        <td><a href="servicio/{{$servicio['id']}}">{{$servicio['id']}}</a></td>
        <td>{{$servicio['servicio']}}</td>
        <td>{{$servicio['precio']}}</td>
        <td>{{$servicio['unidad']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <script> $('#servicios').addClass('active') </script>
</div>
@endsection