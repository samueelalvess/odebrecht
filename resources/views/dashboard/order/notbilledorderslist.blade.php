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
        <label class="btn btn-default nao-faturado @if($status == 1) {{'active'}} @endif libaut">
            <input type="radio" name="filtro" id="filtro1">
            <span class="radio-dot"></span>
            <span class="nao-faturado-word">Lib. Automático</span>
        </label>

        <label class="btn btn-default nao-faturado bloq @if($status == 2) {{'active'}} @endif">
            <input type="radio" name="filtro" id="filtro2">
            <span class="radio-dot"></span>
            <span class="nao-faturado-word">Bloqueado</span>
        </label>

        <label class="btn btn-default nao-faturado libman @if($status == 3) {{'active'}} @endif">
            <input type="radio" name="filtro" id="filtro2">
            <span class="radio-dot"></span>
            <span class="nao-faturado-word">Lib. Manual</span>
        </label>

        <label class="btn btn-default nao-faturado rejei @if($status == 4) {{'active'}} @endif">
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

            @foreach($rpbilled as $data)
              <tr>
                <td>{{$data->PEDIDO}}</td>
                <td>{{$data->NOTA}}</td>
                <td>{{$data->NOME_CLIENTE}}</td>
                <td>{{$data->NOME_TRANSP}}</td>
                <td>{{date('d/m/Y', strtotime($data->EMISSAO_PEDIDO))}}</td>
                <td>{{date('d/m/Y', strtotime($data->EMISSAO_NOTA))}}</td>
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
<script src="{{ asset('dashboard/assets/js/order/notbilled.js') }}"></script>
@parent
@stop
