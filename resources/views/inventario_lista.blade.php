@extends('layout')

@section('content')
<div class="container" style="margin-top:30px">
  <table class="table">
    <thead>
      <th>id</th>
      <th>Material</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Existencia</th>
    </thead>
    <tbody>
      @foreach($materiales as $item)
      <tr>
        <td><a href="item/{{$item['id']}}">{{$item['id']}}</a></td>
        <td>{{$item['material']}}</td>
        <td>{{$item['precio']}}</td>
        <td>{{$item['cantidad']}}</td>
        <td>{{$item['existencia']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <script> $('#materiales').addClass('active') </script>
</div>
@endsection