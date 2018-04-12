@extends('dashboard.base')

@section('css')
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
@parent
@stop

@section('title', 'Pedidos Faturados')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Pedidos Faturados</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <table class="table table-responsive table-striped table-hover" id="billedList">
          <thead>
            <th>#</th>
            <th>Nota</th>
            <th>Cliente</th>
            <th>Transportadora</th>
            <th>Emissão Pedido</th>
            <th>Emissão Nota</th>
          </thead>
          <tbody>

            <tr>
              <td>02-2018-W000047501</td>
              <td>000057633</td>
              <td>COM BOM DE ALIMENTOS LTDA</td>
              <td>EXPRESSO JUNDIAI LOGISTICA E TRANSPORTE LTDA</td>
              <td>29/03/2018</td>
              <td>05/04/2018</td>
            </tr>

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
<script src="{{ asset('dashboard/assets/js/order/billed.js') }}"></script>
@parent
@stop
