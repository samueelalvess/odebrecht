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
            @foreach($rpbilled as $data)
              <tr>
                <td>{{$data->PEDIDO}}</td>
                <td>{{$data->NOTA}}</td>
                <td>{{$data->NOME_CLIENTE}}</td>
                <td>{{$data->NOME_TRANSP}}</td>
                <td>{{$data->EMISSAO_PEDIDO}}</td>
                <td>{{$data->EMISSAO_NOTA}}</td>
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
<script src="{{ asset('dashboard/assets/js/order/billed.js') }}"></script>
@parent
@stop
