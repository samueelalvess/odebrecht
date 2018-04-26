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
              <div class="col-xs-12 col-sm-12 col-md-12">CÓD. PEDIDO: <label>000047786</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">TIPO DE PEDIDO: <label>VENDAS</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">DATA ENTREGA: <label>05/04/2018</label></div>
          </div>
          <hr>
          <h5><strong>VENDEDOR</strong></h5>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  G BROZOZA
              </div>
          </div>

          <h5><strong>EFETUADO PELA FILIAL</strong></h5>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">EFETUADO PELA FILIAL: <label>[0011-93] ODEBRECHT COMERCIO E INDUSTRIA DE CAFE</label></div>
          </div>
          <h5><strong>DADOS PARA O FATURAMENTO</strong></h5>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">EMPRESA: <label>M C X SUPERMERCADO LTDA</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CNPJ: <label>12312779000160</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">INSC. EST.: <label>0963378929</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">ENDEREÇO: <label>RUA MAJOR TITO</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CEP: <label>85092-192</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CIDADE: <label>PORTO ALEGRE</label></div>
              <div class="col-xs-12 col-sm-12 col-md-12">ESTADO: <label>MS</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">TELEFONE: <label>5132452888</label></div>
              <div class="col-xs-12 col-sm-12 col-md-12">CONTATO: <label>234234223</label></div>
          </div>
          <hr>
          <div class="col-md-4 col-sm-12 col-xs-12">
          <h5><strong>DADOS PARA ENTREGA</strong></h5>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">ENDEREÇO: <label></label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CIDADE: <label></label></div>
              <div class="col-xs-12 col-sm-12 col-md-12">ESTADO: <label></label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CEP: <label></label></div>
          </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
          <h5><strong>DADOS PARA COBRANÇA</strong></h5>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">ENDEREÇO: <label></label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">BAIRRO: <label></label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CIDADE: <label></label></div>
              <div class="col-xs-12 col-sm-12 col-md-12">ESTADO: <label></label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">CEP: <label></label></div>
          </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
          <h5><strong>CONDIÇÕES DE PAGAMENTO</strong></h5>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">TIPO FRETE: <label>FOB</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">TIPO DE DOCUMENTO: <label>Boleto</label></div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">PRAZO DE PAGAMENTO: <label>01 dia</label></div>
          </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12"><hr></div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  MENSAGEM ROMANEIO:<br />
                  <label>TESTE DE SISTEMA</label>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  OBS. LIBERAÇÃO:<br />
                  <label>TESTE DE SISTEMA</label>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  OBSERVAÇÕES:<br />
                  <label>TESTE DE SISTEMA</label>
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
                          <tr>
                              <td>000002</td>
                              <td>CAFE EM COCO</td>
                              <td class="text-right">1</td>
                              <td class="text-right">R$ 2,00</td>
                              <td class="text-right">R$ 2,00</td>
                          </tr>
                          <tr>
                              <td>000116P</td>
                              <td>CAFE ODEBRECHT ALMOFADA 250G</td>
                              <td class="text-right">1</td>
                              <td class="text-right">R$ 2,00</td>
                              <td class="text-right">R$ 2,00</td>
                          </tr>
                      </tbody>
                      <tfoot>
                          <tr>
                              <th colspan="4" class="text-right"><strong>TOTAL</strong></th>
                              <th class="text-right">
                                  R$ 4,00
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
