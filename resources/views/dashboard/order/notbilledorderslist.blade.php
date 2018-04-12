@extends('dashboard.base')

@section('css')
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/order/notbilled.css') }}">
@parent
@stop

@section('title', 'Pedidos Não Faturados')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Filtrar por:</h2>
        <div class="clearfix"></div>
      </div>

      <div class="col-md-12" align="center">
        <div class="nao-faturado-group" id="nao-faturado-group" data-toggle="buttons">
        <label class="btn btn-default nao-faturado active libaut">
            <input type="radio" name="filtro" id="filtro1">
            <span class="radio-dot"></span>
            <span class="nao-faturado-word">Lib. Automático</span>
        </label>

        <label class="btn btn-default nao-faturado bloq">
            <input type="radio" name="filtro" id="filtro2">
            <span class="radio-dot"></span>
            <span class="nao-faturado-word">Bloqueado</span>
        </label>

        <label class="btn btn-default nao-faturado libman">
            <input type="radio" name="filtro" id="filtro2">
            <span class="radio-dot"></span>
            <span class="nao-faturado-word">Lib. Manual</span>
        </label>

        <label class="btn btn-default nao-faturado rejei">
            <input type="radio" name="filtro" id="filtro2">
            <span class="radio-dot"></span>
            <span class="nao-faturado-word">Rejeitado</span>
        </label>

        </div>
      </div>

      <div class="col-md-12"><hr></div>

      <div class="x_content">
        <table class="table table-responsive table-striped table-hover" id="notbilledList">
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
<script src="{{ asset('dashboard/assets/js/order/notbilled.js') }}"></script>
@parent
@stop
