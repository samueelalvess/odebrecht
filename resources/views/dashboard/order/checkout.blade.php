@extends('dashboard.base')

@section('css')
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/lib/animate/animate.min.css') }}">
@parent
@stop

@section('title', 'Finalizar Pedido')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <div id="dv-clienteselecionado" class="container">
          <div class="well well-sm">
              <div class="row">
                  <div class="col-md-4">
                      <h4><i class="fa fa-building-o"></i> <strong>SUPERMERCADO SAMUEL</strong></h4>
                      <strong>Documento</strong> 08779560903
                  </div>
                  <div class="col-md-4">
                      <strong>Nome</strong> SAMUEL ALVES DA SILVA<br>
                      <strong>E-mail</strong> ATENDIMENTO@W8TECNOLOGIA.COM.BR<br>
                      <strong>Telefone</strong> 43996088692
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
                <option value="{{trim($br->ukey)}}">{{trim($br->a10_002_c)}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-md-6">
            <label>Tipo Frete</label>
            <select class="form-control" name="tipofrete">
              <option> -- SELECIONE -- </option>
              <option value="1">EMITENTE</option>
              <option value="2">DESTINATARIO/REMETENTE</option>
              <option value="3">TERCEIROS</option>
              <option value="4">SEM FRETE</option>
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
          <textarea class="form-control" rows="3"></textarea>
          </div>

          <div class="col-md-4">
            <label>Obs. Liberação</label>
          <textarea class="form-control" rows="3"></textarea>
          </div>

          <div class="col-md-4">
            <label>Observações</label>
          <textarea class="form-control" rows="3"></textarea>
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
                            <input type="text" name="nome_fantasia" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-group-sm">
                            <label class="control-label">CNPJ</label>
                            <input type="text" name="cpf_cnpj" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Insc. Estadual</label>
                            <input type="text" name="inscricao_rg" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Endereço</label>
                            <input type="text" name="endereco" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">CEP</label>
                            <input type="text" name="cep" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Cidade</label>
                            <input type="text" name="cidade" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">UF</label>
                            <input type="text" name="estado" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Telefone</label>
                            <input type="text" name="telefone" class="form-control" readonly>
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
                            <input type="text" name="nome_fantasia_ent" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Endereço</label>
                            <input type="text" name="endereco_ent" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">CEP</label>
                            <input type="text" name="cep_ent" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Cidade</label>
                            <input type="text" name="cidade_ent" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">UF</label>
                            <input type="text" name="estado_ent" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Telefone</label>
                            <input type="text" name="telefone_ent" class="form-control" readonly>
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
                            <input type="text" name="nome_fantasia_cob" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Endereço</label>
                            <input type="text" name="endereco_cob" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">CEP</label>
                            <input type="text" name="cep_cob" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Cidade</label>
                            <input type="text" name="cidade_cob" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">UF</label>
                            <input type="text" name="estado_cob" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Telefone</label>
                            <input type="text" name="telefone_cob" class="form-control" readonly>
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
            <th></th>
          </thead>

          <tbody id="carrinhobody">

          </tbody>
        </table>


      </div>

              <div class="col-md-12">
                <hr>
                <button class="btn btn-success pull-right" style="border-radius:0px;"><i class="fa fa-save"></i> Finalizar</button>
              </div>

    </div>
  </div>
</div>


@endsection

@section('javascript')

<script src="{{ asset('dashboard/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/data-table/datatables-init.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/notify/bootstrap-notify.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/checkout/checkout.js') }}"></script>
<script src="{{ asset('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js') }}"></script>
<script>

</script>
@parent
@stop
