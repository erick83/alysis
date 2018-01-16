@extends('layout')

@section('content')
<div class="container" style="margin-top:30px">
  <table class="table">
    <thead>
      <th>id</th>
      <th>Producto</th>
    </thead>
    <tbody>
      @foreach($productos as $producto)
      <tr>
        <td><a href="producto/{{$producto['id']}}">{{$producto['id']}}</a></td>
        <td>{{$producto['producto']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <script> $('#productos').addClass('active') </script>
</div>
@endsection