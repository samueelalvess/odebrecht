@extends('dashboard.base')

@section('title', 'Impressão Pedido')

@section('content')

<div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Impressão Pedido</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">

        <div class="panel-body">
          <div id="printorder">
          <small>IP: 177.132.139.61</small>
          <h5><strong>PEDIDO DE COMPRA</strong></h5>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CÓD. PEDIDO: <label>{{$print->JJ20_001_C}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">TIPO DE PEDIDO: <label>{{$print->T04_002_C}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">DATA ENTREGA: <label>{{date('d/m/Y', strtotime($print->JJ20_016_D))}}</label></div>
          </div>
          <hr>
          <h5><strong>VENDEDOR</strong></h5>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  {{$print->A33_002_C}}
              </div>
          </div>

          <h5><strong>EFETUADO PELA FILIAL</strong></h5>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">EFETUADO PELA FILIAL: <label>{{$print->A10_002_C}}</label></div>
          </div>
          <h5><strong>DADOS PARA O FATURAMENTO</strong></h5>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">EMPRESA: <label>{{$print->A03_002_C}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CNPJ: <label>{{$print->A03_009_C}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">INSC. EST.: <label>{{$print->A03_010_C}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">ENDEREÇO: <label>{{$print->A03_005_C}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CEP: <label>{{$print->A03_006_C}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CIDADE: <label>{{$print->A24_001_C}}</label></div>
              <div class="col-xs-12 col-sm-12 col-md-12">ESTADO: <label>{{$print->A23_001_C}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">TELEFONE: <label>{{$print->A03_012_C}}</label></div>
              <div class="col-xs-12 col-sm-12 col-md-12">CONTATO: <label>{{$print->A03_016_C}}</label></div>
          </div>
          <hr>
          <div class="col-md-4 col-sm-12 col-xs-12">
          <h5><strong>DADOS PARA ENTREGA</strong></h5>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">ENDEREÇO: <label>{{$print->ENDERECO_ENTREGA}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">BAIRRO: <label>{{$print->BAIRRO_ENTREGA}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CIDADE: <label>{{$print->CIDADE_ENTREGA}}</label></div>
              <div class="col-xs-12 col-sm-12 col-md-12">ESTADO: <label>{{$print->UF_ENTREGA}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CEP: <label>{{$print->CEP_ENTREGA}}</label></div>
          </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
          <h5><strong>DADOS PARA COBRANÇA</strong></h5>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">ENDEREÇO: <label>{{$print->ENDERECO_ENTREGA}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">BAIRRO: <label>{{$print->BAIRRO_ENTREGA}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CIDADE: <label>{{$print->CIDADE_ENTREGA}}</label></div>
              <div class="col-xs-12 col-sm-12 col-md-12">ESTADO: <label>{{$print->UF_ENTREGA}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CEP: <label>{{$print->CEP_ENTREGA}}</label></div>
          </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
          <h5><strong>CONDIÇÕES DE PAGAMENTO</strong></h5>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">TIPO FRETE: <label>{{$print->JJ20_003_C}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">TIPO DE DOCUMENTO: <label>{{$print->A21_002_C}}</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">PRAZO DE PAGAMENTO: <label>{{$print->A13_002_C}}</label></div>
          </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12"><hr></div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  MENSAGEM ROMANEIO:<br />
                  <label>{{$print->JJ20_009_C}}</label>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  OBS. LIBERAÇÃO:<br />
                  <label>{{$print->JJ20_015_M}}</label>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  OBSERVAÇÕES:<br />
                  <label>{{$print->JJ20_007_M}}</label>
              </div>
          </div>
          <hr />
          <h5><strong>ITENS DO PEDIDO</strong></h5>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <table class="table table-bordered" width="100%">
                      <thead>
                          <tr>
                              <td width="40">Cód.</td>
                              <th>
                              Produto
                              </th>
                              <th width="60" class="text-right">Qtde.</th>
                              <th width="160" class="text-right">Valor unitário</th>
                              <th width="160" class="text-right">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $total = 0; ?>
                        @foreach($product as $prod)
                          <tr>
                              <td>{{$prod->D04_001_C}}</td>
                              <td>{{$prod->D04_002_C}}</td>
                              <td class="text-right">{{$prod->JJ21_001_B}}</td>
                              <td class="text-right">R$ {{number_format($prod->JJ21_002_B,2,',','.')}}</td>
                              <td class="text-right">R$ {{number_format($prod->JJ21_003_B,2,',','.')}}</td>
                          </tr>
                          <?php

                          $total += $prod->JJ21_003_B;

                           ?>
                        @endforeach
                      </tbody>
                      <tfoot>
                          <tr>
                              <th colspan="4" class="text-right"><strong>TOTAL</strong></th>
                              <th class="text-right">
                                  R$ <?php echo number_format($total,2,',','.'); ?>
                              </th>
                          </tr>
                      </tfoot>
                  </table>
              </div>
          </div>
        </div>


        <div class="form-group"></div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-12">
            <a href="{{ URL::previous() }}"><button type="button" class="btn btn-info"><i class="fa fa-arrow-left"></i> Voltar</button></a>
            <button type="submit" class="btn btn-success pull-right" style="border-radius:0px"><i class="fa fa-save"></i> Salvar</button>
            <button type="button" class="btn btn-warning pull-right printorder" style="border-radius:0px"><i class="fa fa-print"></i> Imprimir</button>
          </div>
        </div>
      </div>

    </div>
  </div>

 </div>
</div>



@endsection

@section('javascript')
<script src="{{ asset('dashboard/assets/js/order/printorder.js') }}"></script>
@parent
@stop
