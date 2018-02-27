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
    <tr>
      <td>13213123</td>
      <td>Samuel Alves da Silva</td>
      <td><button class="btn btn-info">Selecionar</button></td>
    </tr>
  </tbody>
</table>

@endsection
