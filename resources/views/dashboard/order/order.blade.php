@extends('dashboard.base')

@section('css')
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/lib/animate/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css') }}">
<link rel="stylesheet" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css') }}">
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
          @foreach($clients as $client)
          <?php $clienteblade = $client['A03_002_C']; ?>
            <option data-tokens="{{$client->A03_002_C}}" ukey="{{$client->UKEY}}" <?php if(isset($_COOKIE["cliente"]) && trim($_COOKIE["cliente"]) == trim($clienteblade)) echo 'selected'; ?>>{{$client->A03_002_C}}</option>
          @endforeach
        </select>
        <hr>

        <div class="x_title">
          <h2><i class="fa fa-coffe"></i> Produtos</h2>
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
            @foreach($products as $product)
                <tr>
                  <td data-cod="{{$product->D04_001_C}}">{{$product->D04_001_C}}</td>
                  <td data-desc="{{$product->D04_002_C}}">{{$product->D04_002_C}}</td>
                  <td>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[{{$product->D04_001_C}}]">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </span>
                            <input type="text" id="qtd-{{trim($product->D04_001_C)}}" name="quant[{{$product->D04_001_C}}]" class="form-control input-number" value="1" min="1" max="99999999">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[{{$product->D04_001_C}}]">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">R$</span>
                      <input type="text" id="valor-{{trim($product->D04_001_C)}}" name="valorproduto" class="valorprod form-control" data-symbol="R$ " data-thousands="." data-decimal="," placeholder="0,00000">

                    </div>
                  </td>
                  <td>
                    <button class="btn btn-success pull-right btncarrinho" style="border-radius:0px;"><i class="fa fa-plus"></i> <i class="fa fa-shopping-cart"></i></button>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="x_content" style="background-color:#EEEEEE;">
        <br>
        <div class="x_title">
          <h2><i class="fa fa-shopping-cart"></i> Ítens do Pedido</h2>

          <div class="clearfix"></div>
        </div>

        <table class="table table-responsive text-center" id="carrinhoList">

          <thead>

            <th>Cód</th>
            <th class="text-center">Descrição</th>
            <th class="col-md-1 text-center">Qtd</th>
            <th class="col-md-2 text-center">Valor Unit.</th>
            <th class="col-md-2 text-center">Valor Total</th>
            <th></th>
          </thead>

          <tbody id="carrinhobody">

          </tbody>
          <?php

          if (isset($_COOKIE["carrinho"]))
          {
            $cookie = explode('/',$_COOKIE["carrinho"]);
            $total = 0;
            foreach ($cookie as $valor) {
              $coo = explode(':',$valor);

              if(!empty($coo[0]))
              {
                $valor_prod = $coo[4];
                $valor_prod = str_replace('.','',$valor_prod);
                $valor_prod = str_replace(',','.',$valor_prod);
                $total += $valor_prod;

                echo '<tr>
                              <td align="left">'.$coo[0].'</td>
                              <td>'.$coo[1].'</td>
                              <td>

                                  <input type="text" name="quantc[5]" class="form-control input-number" value="'.$coo[2].'" min="1" max="99999999">

                              </td>
                              <td>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">R$</span>
                                  <input type="text" class="form-control" value="'.$coo[3].'">
                                </div>
                              </td>
                             <td align="center">
                                <div class="input-group">
                                  <label>R$ <span id="total_prod_'.$coo[0].'">'.$coo[4].'</span></label>
                                </div>
                              </td>
                              <td>
                                <button class="btn btn-danger pull-right" style="border-radius:0px;" onclick="removelinha(this,\''.$coo[0].'\')"><i class="fa fa-trash"></i></button>
                              </td>
                            </tr>';
              }

            }
          }


          ?>
          <tfoot>
            <tr>
                <th colspan="4" class="text-right"><strong><h4>TOTAL</h4></strong></th>
                <th class="text-center">
                    <h4>R$ <span id="totaltxt"><?php if(isset($_COOKIE["carrinho"])){echo number_format($total,2,',','.');}else{echo'0,00';}?></span></h4>
                </th>
            </tr>
          </tfoot>
        </table>


      </div>

              <div class="col-md-12">
                <hr>
                <a id="link_continuar"><button id="btn_continuar" disabled class="btn btn-info pull-right" style="border-radius:0px;"><i class="fa fa-arrow-right"></i> Continuar</button></a>
              </div>
              <div class="col-md-12" id="div_alerta">
                <span class="pull-right"><small style="color:red">*Informe o cliente e/ou insira um produto para prosseguir com o pedido.</small></span>
              </div>

    </div>
  </div>
</div>


@endsection

@section('javascript')
<script>
$(function() {
  $('.valorprod').maskMoney({
        precision: 5,
        allowZero:true,
        keepZeroOnFocus: true,
        autoLoad: true
});
  });
</script>
<script src="{{ asset('dashboard/assets/js/lib/notify/bootstrap-notify.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/order/order.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/data-table/jquery.dataTables.min.js') }}"></script>
<script>

</script>
@parent
@stop
