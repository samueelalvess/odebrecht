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
            <small><em>Ano <label>2018 </label> | Vendedor: <label>Samuel Alves</label> </em></small>
          </h2>
          </div>
          <div class="col-md-3 form-inline">
          <span class="pull-right">Ano:
            <select class="form-control">
              <option value="2017">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
            </select></span>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <canvas id="evolutivo" style="position: relative; height:40vh; width:80vw" class="hidden-xs"></canvas>
        </div>

        <div class="clearfix"></div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">

          <div class="x_title">
            <div class="col-md-12">
            <h2>Top 10 Clientes <small><em>(Mês atual)</em></small></h2>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12">
            <table class="table table-responsive table-striped table-hover">
              <thead>
                <th>Num. Pedidos</th>
                <th>Nome</th>
              </thead>
              <tbody>
                @foreach($topclient as $client)
                  <tr>
                    <td>{{$client->Total}}</td>
                    <td>{{trim($client->A03_002_C)}}</td>
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
            <h2>Top 10 Produtos <small><em>(Mês atual)</em></small></h2>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12">
            <table class="table table-responsive table-striped table-hover">
              <thead>
                <th>Cod</th>
                <th>Descrição</th>
              </thead>
              <tbody>
                <tr>
                  <td>1A4520F3-6A2B-4CFA-A</td>
                  <td>ADOCANTE CAFE ODEBRECHT SACHE 1000</td>
                </tr>
                <tr>
                  <td>20081210STAR_50Z6510</td>
                  <td>AÇUCAR</td>
                </tr>
                <tr>
                  <td>02D02FF4-6BBE-4D4E-8</td>
                  <td>CAFE TORRADO EM GRAO EMBALAGEM</td>
                </tr>
                <tr>
                  <td>200902130UMYKZ0P8MYO</td>
                  <td>CAFE SOLUVEL ODEBRECHT POTE 200 GR</td>
                </tr>
                <tr>
                  <td>200901220UMYKD0VRA72</td>
                  <td>CAFE TORRADO EM GRAO</td>
                </tr>
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
