@extends('dashboard.base')

@section('css')
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/lib/animate/animate.min.css') }}">
@parent
@stop

@section('title', 'Finalizar Pedido')

@section('content')
<form action="{{route('finalizarTESTE')}}" method="post">
  {{ csrf_field() }}
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <div id="dv-clienteselecionado" class="container">
          <div class="well well-sm">
              <div class="row">
                  <div class="col-md-6">
                      <h4><i class="fa fa-building-o"></i> <strong>{{$clientbilled->EMPRESA}}</strong></h4>
                      <strong>Documento</strong> {{$clientbilled->CNPJ_CPF}}
                  </div>
                  <div class="col-md-6">
                      <strong>Nome</strong> {{$clientbilled->EMPRESA}}<br>
                      <strong>E-mail</strong> ATENDIMENTO@W8TECNOLOGIA.COM.BR<br>
                      <strong>Telefone</strong> {{$clientbilled->TELEFONE}}
                  </div>
                  <div class="col-md-4"></div>
              </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
          <div class="col-md-6">
            <label>Filial</label>
            <select class="form-control" name="filial">
              <option> -- SELECIONE -- </option>
              @foreach($branch as $br)
                <option value="{{trim($br->ukey)}}">{{$br->A10_016_C}} - {{trim($br->a10_002_c)}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-md-6">
            <label>Tipo Frete</label>
            <select class="form-control" name="tipofrete">
              <option> -- SELECIONE -- </option>
              <option value="CIF">CIF</option>
              <option value="FOB">FOB</option>
            </select>
          </div>
          <div class="col-md-12"><hr></div>
          <div class="col-md-4">
            <label>Tipo de Documento</label>
          <select class="form-control" name="tipodocumento">
            <option> -- SELECIONE -- </option>
            @foreach($documents as $doc)
              <option value="{{trim($doc->ukey)}}">{{trim($doc->a21_002_c)}}</option>
            @endforeach
          </select>
          </div>

          <div class="col-md-4">
            <label>Prazo de Pagamento</label>
            <select class="form-control" name="prazopagamento">
              <option> -- SELECIONE -- </option>
              @foreach($payment as $pay)
                <option value="{{trim($pay->ukey)}}">{{trim($pay->a13_002_c)}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-md-4">
            <label>Tipo de Faturamento</label>
            <select class="form-control" name="tipofaturamento">
              <option> -- SELECIONE -- </option>
              @foreach($billed as $bi)
                <option value="{{trim($bi->ukey)}}">{{trim($bi->t04_002_c)}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-12"><hr></div>

          <div class="col-md-4">
            <label>Mensagem romaneio</label>
          <textarea name="msgromaneio" class="form-control" rows="3"></textarea>
          </div>

          <div class="col-md-4">
            <label>Obs. Liberação</label>
          <textarea name="msgliberacao" class="form-control" rows="3"></textarea>
          </div>

          <div class="col-md-4">
            <label>Observações</label>
          <textarea name="observacoes" class="form-control" rows="3"></textarea>
          </div>
          <div class="col-md-12"><hr></div>

          <div class="col-md-4">
            <label>Data de entrega</label>
          <input type="date" name="dataentrega" class="form-control">
          </div>
          <div class="col-md-12"><hr></div>

          <div class="col-md-12">

            <ul class="nav nav-tabs nav-justified">
              <li class="active"><a data-toggle="tab" href="#faturamento">Dados Faturamento</a></li>
              <li><a data-toggle="tab" href="#entrega">Dados Entrega</a></li>
              <li><a data-toggle="tab" href="#cobranca">Dados Cobrança</a></li>
              <li><a data-toggle="tab" href="#vendedor">Vendedor</a></li>
            </ul>

            <div class="tab-content">


              <div id="faturamento" class="tab-pane fade in active">
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-group-sm">
                            <label class="control-label">Empresa</label>
                            <input type="text" name="nome_fantasia" value="{{$clientbilled->EMPRESA}}" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-group-sm">
                            <label class="control-label">CNPJ</label>
                            <input type="text" name="cpf_cnpj" value="{{$clientbilled->CNPJ_CPF}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Insc. Estadual</label>
                            <input type="text" name="inscricao_rg" value="{{$clientbilled->INSCRICAO_RG}}" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Endereço</label>
                            <input type="text" name="endereco" value="{{$clientbilled->ENDERECO}} - {{$clientbilled->NUMERO}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">CEP</label>
                            <input type="text" name="cep" value="{{$clientbilled->CEP}}" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Cidade</label>
                            <input type="text" name="cidade" value="{{$clientbilled->CIDADE}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">UF</label>
                            <input type="text" name="estado" value="{{$clientbilled->UF}}" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Telefone</label>
                            <input type="text" name="telefone" value="{{$clientbilled->TELEFONE}}" class="form-control" readonly>
                        </div>
                    </div>
                </div>
              </div>


              <div id="entrega" class="tab-pane fade">
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-group-sm">
                            <label class="control-label">Empresa</label>
                            <input type="text" name="nome_fantasia_ent" value="@if(!empty($delivery)) {{$delivery->EMPRESA_ENTREGA}} @endif" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Endereço</label>
                            <input type="text" name="endereco_ent" value="@if(!empty($delivery)) {{$delivery->ENDERECO_ENTREGA}} - {{$delivery->NUMERO_ENTREGA}} @endif" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">CEP</label>
                            <input type="text" name="cep_ent" value="@if(!empty($delivery)) {{$delivery->CEP_ENTREGA}} @endif" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Cidade</label>
                            <input type="text" name="cidade_ent" value="@if(!empty($delivery)) {{$delivery->CIDADE_ENTREGA}} @endif" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">UF</label>
                            <input type="text" name="estado_ent" value="@if(!empty($delivery)) {{$delivery->UF_ENTREGA}} @endif" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Telefone</label>
                            <input type="text" name="telefone_ent" value="@if(!empty($delivery)) {{$delivery->TELEFONE_ENTREGA}} @endif" class="form-control" readonly>
                        </div>
                    </div>
                </div>
              </div>
              <div id="cobranca" class="tab-pane fade">
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-group-sm">
                            <label class="control-label">Empresa</label>
                            <input type="text" name="nome_fantasia_cob" value="@if(!empty($delivery)) {{$delivery->EMPRESA_ENTREGA}} @endif" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Endereço</label>
                            <input type="text" name="endereco_cob" value="@if(!empty($delivery)) {{$delivery->ENDERECO_ENTREGA}} - {{$delivery->NUMERO_ENTREGA}} @endif" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">CEP</label>
                            <input type="text" name="cep_cob" value="@if(!empty($delivery)) {{$delivery->CEP_ENTREGA}} @endif" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Cidade</label>
                            <input type="text" name="cidade_cob" value="@if(!empty($delivery)) {{$delivery->CIDADE_ENTREGA}} @endif" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">UF</label>
                            <input type="text" name="estado_cob" value="@if(!empty($delivery)) {{$delivery->UF_ENTREGA}} @endif" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Telefone</label>
                            <input type="text" name="telefone_cob" value="@if(!empty($delivery)) {{$delivery->TELEFONE_ENTREGA}} @endif" class="form-control" readonly>
                        </div>
                    </div>
                </div>
              </div>
              <div id="vendedor" class="tab-pane fade">
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Nome</label>
                            <input type="text" name="nome_vendedor" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">E-mail</label>
                            <input type="text" name="e-mail_vendedor" class="form-control" readonly>
                        </div>
                    </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-12"><hr></div>


      </div>

      <div class="x_content" style="background-color:#EEEEEE;">
        <br>
        <div class="x_title">
          <h2><i class="fa fa-shopping-cart"></i> Ítens do Pedido</h2>
          <div class="clearfix"></div>
        </div>

        <table class="table table-responsive text-center" id="productList">

          <thead>
            <th>Cód</th>
            <th class="text-center">Descrição</th>
            <th class="col-md-1 text-center">Qtd</th>
            <th class="col-md-2 text-center">Valor Unit.</th>
            <th class="col-md-2 text-center">Valor Total</th>
          </thead>

          <tbody id="carrinhobody">
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
                                <td align="left"><span name="codigo[]">'.$coo[0].'</span>
                                <input type="hidden" name="codigo[]" value="'.$coo[0].'">
                                </td>
                                <td>'.$coo[1].'</td>
                                <td>

                                    <span name="quantidade[]">'.$coo[2].'</span>
                                    <input type="hidden" name="quantidade[]" value="'.$coo[2].'">
                                </td>
                                <td align="center">
                                  <div class="input-group">
                                    R$
                                    <span name="valor_unitario[]">'.$coo[3].'</span>
                                    <input type="hidden" name="valor_unitario[]" value="'.$coo[3].'">
                                  </div>
                                </td>
                               <td align="center">
                                  <div class="input-group">
                                    <span name="valor_total[]">R$ '.$coo[4].'</span>
                                    <input type="hidden" name="valor_total[]" value="'.$coo[4].'">
                                  </div>
                                </td>

                              </tr>';
                }

              }


            }


            ?>
          </tbody>
          <tfoot>
            <tr>
                <th colspan="4" class="text-right"><strong><h4>TOTAL</h4></strong></th>
                <th class="text-center">
                    <h4>R$ <span id="totaltxt"> <?php if (isset($_COOKIE["carrinho"])) { echo number_format($total,2,',','.'); } else { echo '0,00'; } ?> </span></h4>
                </th>
            </tr>
          </tfoot>
        </table>


      </div>

              <div class="col-md-12">
                <hr>
                <button type="submit" class="btn btn-success pull-right" style="border-radius:0px;"><i class="fa fa-save"></i> Finalizar</button>
              </div>

    </div>
  </div>
</div>

</form>


@endsection

@section('javascript')

<script src="{{ asset('dashboard/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/data-table/datatables-init.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/notify/bootstrap-notify.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/order/checkout.js') }}"></script>
<script src="{{ asset('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js') }}"></script>
<script>

</script>
@parent
@stop
