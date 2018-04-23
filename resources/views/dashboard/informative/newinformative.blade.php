@extends('dashboard.base')

@section('title', 'Novo Informativo')

@section('content')

<div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Dados Novo Informativo</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">

        @if(!empty($informative))
        <form class="form-horizontal form-label-left input_mask">
          {{ method_field('PUT') }}
        @else
        <form class="form-horizontal form-label-left input_mask">
        @endif
          {{ csrf_field() }}

        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
          <label>Título Informativo</label>
          <input type="text" required name="titulo" class="form-control has-feedback-left" value="@if(!empty($informative)){{$informative->A33_002_C}}@endif" placeholder="Título Informativo">
          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
          <label>Descrição</label>
          <textarea name="descricao" required>
            @if(!empty($informative)){{$informative->A33_002_C}}@endif
          </textarea>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
          <label>expiracao</label>
          <input type="date" name="dataexpiracao">
        </div>

        <div class="form-group"></div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-12">
            <a href="{{ URL::previous() }}"><button type="button" class="btn btn-info"><i class="fa fa-arrow-left"></i> Voltar</button></a>
            <button type="button" class="btn btn-success pull-right" style="border-radius:0px"><i class="fa fa-save"></i> Salvar</button>
          </div>
        </div>
      </form>
      </div>

    </div>
  </div>

</div>



@endsection

@section('javascript')
<script src="{{ asset('https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js') }}"></script>
<script>
			CKEDITOR.replace('descricao', {
        height:500
      });
</script>
@parent
@stop
