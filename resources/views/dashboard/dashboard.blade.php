@extends('dashboard.base')

@section('css')
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
@parent
@stop

@section('title', 'Dashboard')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <div class="col-md-9">
          <h2>Evolutivo Mensal de Faturamento Pessoal
            <small><em>Ano <label>{{date('Y')}} </label> | Vendedor: <label>{{ Auth::user()->name }}</label> </em></small>
          </h2>
          </div>
          <div class="col-md-3 form-inline">
          <!--<span class="pull-right">Ano:
            <select class="form-control">
              <option value="2017">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
            </select></span> -->
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
          @foreach($billeds as $billed)
          <meta name="{{$billed->MonthName}}_vendas" content="{{$billed->TOTAL}} " >
          @endforeach
          @foreach($notbilleds as $notbilled)
          <meta name="{{$notbilled->MonthName}}_pedidos" content="{{$notbilled->TOTAL}} " >
          @endforeach
          <canvas id="evolutivo" style="position: relative; height:40vh; width:80vw" class="hidden-xs"></canvas>
        </div>

        <div class="clearfix"></div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">

          <div class="x_title">
            <div class="col-md-12">
            <h2>Top 10 Clientes <small><em>(Todos Pedidos)</em></small></h2>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12">
            <table class="table table-responsive table-striped table-hover">
              <thead>
                <th><small>Pedidos</small></th>
                <th>Nome</th>
                <th>Valor</th>
              </thead>
              <tbody>
                @foreach($topclient as $client)
                  <tr>
                    <td>{{$client->NCOMPRAS}}</td>
                    <td>{{trim($client->CLIENTE)}}</td>
                    <td>{{trim($client->VALOR)}}</td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          </div>

          <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">

          <div class="x_title">
            <div class="col-md-12">
            <h2>Top 10 Produtos <small><em>(Todos Pedidos)</em></small></h2>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12">
            <table class="table table-responsive table-striped table-hover">
              <thead>
                <th><small>Vendas</small></th>
                <th>Descrição</th>
              </thead>
              <tbody>
                @foreach($topproduct as $product)
                    <tr>
                      <td>{{$product->Total}}</td>
                      <td>{{trim($product->D04_002_C)}}</td>
                    </tr>
                @endforeach

              </tbody>
            </table>
          </div>

          <div class="clearfix"></div>
        </div>
    </div>


</div>
@endsection

@section('javascript')
<script src="{{ asset('dashboard/assets/js/lib/data-table/datatables.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/data-table/datatables-init.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/dashboard/dashboard.js') }}"></script>
@parent
@stop
