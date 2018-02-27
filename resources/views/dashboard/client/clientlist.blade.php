@extends('dashboard.base')

@section('title', 'Clientes')

@section('content')

<table class="table table-responsive table-striped table-hover">
  <thead>
    <th>Documento</th>
    <th>Nome</th>
    <th></th>
  </thead>
  <tbody>
    @foreach($client as $clients)
    <tr>
      <td>13213123</td>
      <td>{{$clients->a03_002_c}}</td>
      <td><button class="btn btn-info">Selecionar</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
