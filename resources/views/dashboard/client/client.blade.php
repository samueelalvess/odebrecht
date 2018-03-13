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

        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
          <input type="text" class="form-control has-feedback-left" placeholder="Nome">
          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
          <input type="text" class="form-control" placeholder="CPF">
          <span class="fa fa-id-card form-control-feedback right" aria-hidden="true"></span>
        </div>

        <div class="form-group"></div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-12">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Salvar</button>
          </div>
        </div>
      </form>
      </div>

    </div>
  </div>

</div>



@endsection
