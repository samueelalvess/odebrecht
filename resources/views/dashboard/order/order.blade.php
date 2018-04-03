@extends('dashboard.base')

@section('css')
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/lib/animate/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css') }}">
@parent
@stop

@section('title', 'Novo Pedido')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Novo Pedido</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">

          <h2>Cliente</h2>
          <select class="selectpicker form-control" data-live-search="true">
            <option> -- Informe o cliente que você deseja realizar o pedido -- </option>
            <option data-tokens="cafe">CAFE SOLUVEL ODEBRECHT SACHET 24X50 GR</option>
            <option data-tokens="açucar">AÇUCAR SOLUVEL ODEBRECHT</option>
          </select>
          <hr>

        <div class="x_title">
          <h2>Produtos</h2>
          <div class="clearfix"></div>
        </div>

        <table class="table table-responsive table-striped table-hover" id="productList">

          <thead>
            <th>Cód</th>
            <th>Descrição</th>
            <th class="col-md-2">Qtd</th>
            <th class="col-md-2">Valor Unit.</th>
            <th></th>
          </thead>

          <tbody>
            <tr>
              <td>000053C</td>
              <td>CAFE SOLUVEL ODEBRECHT SACHET 24X50 GR</td>
              <td>
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </span>
                        <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                </div>
              </td>
              <td>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">R$</span>
                  <input type="text" class="form-control" placeholder="0,00">
                </div>
              </td>
              <td>
                <button class="btn btn-success pull-right" style="border-radius:0px;"><i class="fa fa-plus"></i> <i class="fa fa-shopping-cart"></i></button>
              </td>
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
<script src="{{ asset('dashboard/assets/js/lib/notify/bootstrap-notify.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/order/order.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js') }}"></script>
@parent
@stop
