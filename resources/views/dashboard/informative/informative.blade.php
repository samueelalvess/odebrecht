@extends('dashboard.base')

@section('title', 'Informativo')

@section('content')

<div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><label>@if(!empty($informative)){{$informative->titulo}}@endif</label></h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        @if(!empty($informative)){!! $informative->texto !!}@endif
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
