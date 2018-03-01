@extends('dashboard.base')

@section('css')
<link rel="stylesheet" href="{{ asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
@parent
@stop

@section('title', 'Clientes')

@section('content')

<table class="table table-responsive table-striped table-hover" id="clientList">
  <thead>
    <th>Documento</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Telefone</th>
    <th class="col-md-1"></th>
  </thead>
  <tbody>
    @foreach($client as $clients)
    <tr>
      <td>13213123</td>
      <td>{{$clients->a03_002_c}}</td>
      <td>teste@teste.com</td>
      <td>(43) 3324-0698</td>
      <td><button class="btn btn-info"><i class="fa fa-eye"></i> Visualizar</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('javascript')
<script src="{{ asset('dashboard/assets/js/lib/data-table/datatables.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/data-table/datatables-init.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/client/client.js') }}"></script>
@parent
@stop
