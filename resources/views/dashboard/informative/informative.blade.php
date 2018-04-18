@extends('dashboard.base')

@section('title', 'Informativo')

@section('content')

<div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Detalhe Informativo</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">

<p>Estamos trabalhando para melhorar cada vez mais esse serviço</p>

Faca o pedido a qualquer hora do dia, de seu computador, tablet ou smartphone. Você pode fazer o pedido de duas formas:
<br>
<br>1 - Acessando o menu CLIENTES para selecionar o cliente que você deseja comprar, em seguida acessar o menu PRODUTOS para adicionar os produtos que deseja comprar. Note que irá aparecer no menu um CARRINHO de compras indicando a quantidade de produtos foi adicionado, ao clicar nele você será levado para uma página onde ao final você poderá finalizar seu pedido.
<br>
<br>2 - Acessando o menu VENDAS a opção INICIAR UM PEDIDO, nesta página você poderá selecionar o Cliente, adicionar o Produto ao Carrinho e Finalizar o Pedido. Este recurso facilitará a realização do pedido nos celulares e tablets.
<br>
<br>Escolha a forma que você acha melhor e conclua sua compras.
<br>
<br>Depois que o Pedido for finalizado você pode imprimir o seu Pedido.
<br>
<br>Para acompanhar o seu pedido existem dois recursos no menu VENDAS:
<br>
<br>1 - Pedidos não Faturados - indica que seu pedido foi feito mais ainda não foi processado pela equipe interna
<br>2 - Pedidos Faturados - Indica que o pedido foi faturado com sucesso.
<br>
<br>Boas compras!
<br>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-12">
            <a href="{{ URL::previous() }}"><button type="button" class="btn btn-info"><i class="fa fa-arrow-left"></i> Voltar</button></a>
          </div>
        </div>
      </form>
      </div>

    </div>
  </div>

</div>



@endsection
