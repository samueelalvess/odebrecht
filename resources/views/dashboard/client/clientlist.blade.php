@extends('dashboard.base')

@section('css')
<link rel="stylesheet" href="{{ asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
@parent
@stop

@section('title', 'Clientes')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Clientes</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
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
              <td>{{$clients->A03_009_C}}</td>
              <td>{{$clients->A03_002_C}}</td>
              <td>{{$clients->A03_017_C}}</td>
              <td>{{$clients->A03_012_C}}</td>
              <td><button class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </button></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>

@endsection

@section('javascript')
<script src="{{ asset('dashboard/assets/js/lib/data-table/datatables.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/data-table/datatables-init.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/client/client.js') }}"></script>
@parent
@stop
