<div align="center">
    <table cellpadding="0" width="860" border="0">
        <tbody>
            <tr>
                <td>
                    <p>
                        <img
                            id="_x0000_i1025"
                            src="http://187.18.101.205/dashboard/assets/img/logo.png"
                            alt="Logo Café Odebrecht - Desde 1956"
                            height="59"
                            width="250"
                            border="0"
                        />
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div align="center">
    <table cellpadding="0" width="860" border="0">
        <tbody>
            <tr>
                <td>
                    <p>
                        <strong>PEDIDO DE COMPRA</strong>
                    </p>
                    <table cellpadding="0" width="860" border="0">
                        <tbody>
                            <tr>
                                <td width="33%">
                                    <p>
                                        Nº do PEDIDO:
                                    </p>
                                </td>
                                <td width="33%">
                                    <p>
                                        TIPO DE PEDIDO:
                                    </p>
                                </td>
                                <td width="33%">
                                    <p>
                                        EFETUADO PELA FILIAL:
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        {{$print->JJ20_001_C}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{$print->T04_002_C}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{$print->A10_016_C}} - {{$print->A10_002_C}}
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        <strong>VENDEDOR</strong>
                    </p>
                    <table cellpadding="0" width="860" border="0">
                        <tbody>
                            <tr>
                                <td>
                                    <p>
                                        {{$print->A33_002_C}}
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        <br/>
                        <strong>DADOS PARA O FATURAMENTO</strong>
                    </p>
                    <table cellpadding="0" width="860" border="0">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        EMPRESA: {{$print->A03_002_C}}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <p>
                                        CNPJ: {{$print->A03_009_C}}
                                    </p>
                                </td>
                                <td width="50%">
                                    <p>
                                        INSC. EST.: {{$print->A03_010_C}}

                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <p>
                                        ENDEREÇO: {{$print->A03_005_C}}
                                    </p>
                                </td>
                                <td width="50%">
                                    <p>
                                        CEP: {{$print->A03_006_C}}<
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <p>
                                        CIDADE: {{$print->A24_001_C}}
                                    </p>
                                </td>
                                <td width="50%">
                                    <p>
                                        ESTADO: {{$print->A23_001_C}}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <p>
                                        TELEFONE: {{$print->A03_012_C}}
                                    </p>
                                </td>
                                <td width="50%">
                                    <p>
                                        CONTATO: {{$print->A03_016_C}}
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        <strong>DADOS PARA ENTREGA</strong>
                    </p>
                    <table cellpadding="0" width="860" border="0">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        ENDEREÇO: {{$print->ENDERECO_ENTREGA}}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        CEP: {{$print->CEP_ENTREGA}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        BAIRRO: {{$print->BAIRRO_ENTREGA}}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        CIDADE: {{$print->CIDADE_ENTREGA}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        UF: {{$print->UF_ENTREGA}}
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="0" width="860" border="0">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>DADOS PARA COBRANÇA</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="25%">
                                    <p>
                                        ENDEREÇO: {{$print->ENDERECO_ENTREGA}}
                                    </p>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td width="25%">
                                    <p>
                                        BAIRRO: {{$print->BAIRRO_ENTREGA}}
                                    </p>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td width="25%">
                                    <p>
                                        CIDADE/UF: {{$print->CIDADE_ENTREGA}} / {{$print->UF_ENTREGA}}
                                    </p>
                                </td>
                                <td>
                                    <p>

                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="25%">
                                    <p>
                                        CEP: {{$print->CEP_ENTREGA}}
                                    </p>
                                </td>
                                <td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        <strong>CONDIÇÕES DE PAGAMENTO</strong>
                    </p>
                    <table cellpadding="0" width="860" border="0">
                        <tbody>
                            <tr>
                                <td width="33%">
                                    <p>
                                        TIPO FRETE:
                                    </p>
                                </td>
                                <td width="33%">
                                    <p>
                                        TIPO DE DOCUMENTO:
                                    </p>
                                </td>
                                <td width="33%">
                                    <p>
                                        PRAZO DE PAGAMENTO:
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        {{$print->JJ20_003_C}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{$print->A21_002_C}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{$print->A13_002_C}}
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="0" width="860" border="0">
                        <tbody>
                            <tr>
                                <td width="33%">
                                    <p>
                                        <strong>MENSAGEM ROMANEIO</strong>
                                        :
                                    </p>
                                </td>
                                <td width="33%">
                                    <p>
                                        <strong>OBS. LIBERAÇÃO</strong>
                                        :
                                    </p>
                                </td>
                                <td width="33%">
                                    <p>
                                        <strong>OBSERVAÇÕES</strong>
                                        :
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="33%">
                                  <p>{{$print->JJ20_009_C}}</p>
                                </td>
                                <td width="33%">
                                  <p>{{$print->JJ20_015_M}}</p>
                                </td>
                                <td width="33%">
                                    <p>
                                        {{$print->JJ20_007_M}}
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        <strong>ITENS DO PEDIDO</strong>
                    </p>
                    <div align="center">
                        <hr size="2" align="center" width="100%"/>
                    </div>
                    <table cellpadding="0" width="860" border="0">
                        <tbody>
                            <tr>
                                <td width="40">
                                    <p>
                                        <strong>Cód.</strong>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <strong>Produto</strong>
                                    </p>
                                </td>
                                <td width="60">
                                    <p align="right">
                                        <strong>Qtde.</strong>
                                    </p>
                                </td>
                                <td width="160">
                                    <p align="right">
                                        <strong>Valor unitário</strong>
                                    </p>
                                </td>
                                <td width="160">
                                    <p align="right">
                                        <strong>R$</strong>
                                    </p>
                                </td>
                            </tr>
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
                            <tfoot>
                                <tr>
                                    <th colspan="4" class="text-right"><strong>TOTAL</strong></th>
                                    <th class="text-right">
                                        R$ <?php echo number_format($total,2,',','.'); ?>
                                    </th>
                                </tr>
                            </tfoot>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
