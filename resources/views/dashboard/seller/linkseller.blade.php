@extends('dashboard.base')

@section('title', 'Vincular Vendedor ao Sistema de Pedidos')

@section('content')

<div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Vincular Vendedor ao Sistema de Pedidos</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        @if(!empty($seller->id))
        <form class="form-horizontal form-label-left input_mask" action="{{ route('linksellerUpdate', $ukey) }}" method="POST">
          {{ method_field('PUT') }}
        @else
        <form class="form-horizontal form-label-left input_mask" action="{{ route('linksellerStore', $ukey) }}" method="POST">
        @endif
         {{ csrf_field() }}


        <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
          <label>Nome Vendedor</label>
<<<<<<< HEAD
          <input type="text" name="name" required class="form-control has-feedback-left" value="@if(!empty($seller->id)){{trim($seller->name)}} @else {{trim($seller->A33_002_C)}} @endif">
=======
          <input type="text" name="name" required class="form-control has-feedback-left" value="@if(!empty($seller)){{trim($seller->A33_002_C)}}@endif @if(!empty($user)){{trim($user->name)}}@endif">
>>>>>>> 0c05d258a77fcc8e0b2ff36fba02e013f53e287c
          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
          <label>Email</label>
<<<<<<< HEAD
          <input type="text" required name="email" class="form-control has-feedback-left" value="@if(!empty($seller->id)) {{trim($seller->email)}} @else {{trim($seller->A33_024_C)}} @endif" placeholder="Email do Vendedor">
=======
          <input type="text" required name="email" class="form-control has-feedback-left" value="@if(!empty($seller)){{trim($seller->A33_024_C)}}@endif @if(!empty($user)){{trim($user->email)}}@endif" placeholder="Email do Vendedor">
>>>>>>> 0c05d258a77fcc8e0b2ff36fba02e013f53e287c
          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
          <label>Senha</label>
          <input type="password" required name="password" class="form-control has-feedback-left" value="@if(!empty($seller->id)) {{trim($seller->password)}} @endif" placeholder="Senha Vendedor">
          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
        </div>



        <div class="form-group"></div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-12">
            <a href="{{ URL::previous() }}"><button type="button" class="btn btn-info"><i class="fa fa-arrow-left"></i> Voltar</button></a>
            <button type="submit" class="btn btn-success pull-right" style="border-radius:0px"><i class="fa fa-save"></i> Salvar</button>
          </div>
        </div>
      </form>
      </div>

    </div>
  </div>

</div>



@endsection
