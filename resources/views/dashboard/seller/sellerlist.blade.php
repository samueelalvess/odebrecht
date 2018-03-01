@extends('dashboard.base')

@section('css')
<link rel="stylesheet" href="{{ asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
@parent
@stop

@section('title', 'Vendedores')

@section('btn')
<a href=""><button class="btn btn-success pull-right"><i class="fa fa-plus"></i> Novo Vendedor</button></a>
@endsection

@section('content')
<table class="table table-responsive table-striped table-hover" id="sellerList">
  <thead>
    <th>Nome</th>
    <th>CPF</th>
    <th>Telefone</th>
    <th>E-mail</th>
    <th>Cidade</th>
    <th class="col-md-1"></th>
  </thead>
  <tbody>

    <tr>
      <td>Samuel Alves</td>
      <td>08779560903</td>
      <td>(43) 3324-0698</td>
      <td>teste@teste.com</td>
      <td>Londrina</td>
      <td><button class="btn btn-warning"><i class="fa fa-pencil"></i> Editar</button></td>
    </tr>

  </tbody>
</table>

@endsection

@section('javascript')
<script src="{{ asset('dashboard/assets/js/lib/data-table/datatables.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/data-table/datatables-init.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/seller/seller.js') }}"></script>
@parent
@stop
