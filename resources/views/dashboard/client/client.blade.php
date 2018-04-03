@extends('dashboard.base')

@section('title', 'Cliente')

@section('content')

<div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Dados Cliente</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">

        @if(!empty($client))
        <form class="form-horizontal form-label-left input_mask">
          {{ method_field('PUT') }}
        @else
        <form class="form-horizontal form-label-left input_mask">
        @endif
          {{ csrf_field() }}

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <label>Nome Fantasia</label>
          <input type="text" class="form-control has-feedback-left" readonly value="@if(!empty($client)){{$client->A03_002_C}}@endif" placeholder="Nome Fantasia">
          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <label>Razão Social</label>
          <input type="text" class="form-control has-feedback-left" readonly value="@if(!empty($client)){{$client->A03_003_C}}@endif" placeholder="Razão Social">
          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
          <label>Documento</label>
          <input type="text" class="form-control" readonly value="@if(!empty($client)){{$client->A03_009_C}}@endif" placeholder="Documento">
        </div>

        <div class="x_title">
          <h2><br>Endereço</h2>
          <div class="clearfix"></div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
          <label>Endereço</label>
          <input type="text" class="form-control has-feedback-left" readonly value="@if(!empty($client)){{$client->A03_005_C}}@endif" placeholder="Endereço">
          <span class="fa fa-map-pin form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
          <label>Bairro</label>
          <input type="text" class="form-control has-feedback-left" readonly value="@if(!empty($client)){{$client->A03_004_C}}@endif" placeholder="Bairro">
          <span class="fa fa-map-pin form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-2 col-sm-6 col-xs-12 form-group has-feedback">
          <label>CEP</label>
          <input type="text" class="form-control has-feedback-left" readonly value="@if(!empty($client)){{$client->A03_006_C}}@endif" placeholder="CEP">
          <span class="fa fa-map-pin form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-2 col-sm-6 col-xs-12 form-group">
          <label>Cidade/UF</label>
          <input type="text" class="form-control" readonly value="@if(!empty($client)){{$client->A24_001_C}}@endif" placeholder="Cidade/UF">
        </div>

        <div class="x_title">
          <h2><br>Contato</h2>
          <div class="clearfix"></div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
          <label>Telefone</label>
          <input type="text" class="form-control has-feedback-left" readonly value="@if(!empty($client)){{$client->A03_012_C}}@endif" placeholder="Telefone">
          <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
          <label>Celular</label>
          <input type="text" class="form-control has-feedback-left" readonly value="@if(!empty($client)){{$client->A03_014_C}}@endif" placeholder="Celular">
          <span class="fa fa-mobile form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
          <label>E-mail</label>
          <input type="text" class="form-control has-feedback-left" readonly value="@if(!empty($client)){{$client->A03_017_C}}@endif" placeholder="E-mail">
          <span class="fa fa-at form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="form-group"></div>

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
