@extends('dashboard.base')

@section('css')
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
@parent
@stop

@section('title', 'Informativos')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Informativos</h2>
        <a href="{{route('informativeNew')}}"><button class="btn btn-success btn-sm pull-right" style="border-radius:0px;"><i class="fa fa-plus"></i> Novo Informativo</button></a>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <hr>
        <table class="table table-responsive table-striped table-hover" id="informativeList">
          <thead>
            <th>#</th>
            <th>Título</th>
            <th>Criado Em</th>
            <th class="col-md-2 text-center"><i class="fa fa-cogs"></i></th>
          </thead>
          <tbody>

            <tr>
              <td>1</td>
              <td>Seja bem-vindo ao novo sistema de pedidos</td>
              <td>05/04/2018</td>
              <td align="center">
                <a href="{{route('informativeData')}}"><button class="btn btn-xs btn-warning" style="border-radius:0px"><i class="fa fa-eye"></i> Detalhes</button></a>
                <a href="{{route('informativeEdit')}}"><button class="btn btn-xs btn-info" style="border-radius:0px"><i class="fa fa-pencil"></i> Editar</button></a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>

@endsection

@section('javascript')
<script src="{{ asset('dashboard/assets/js/lib/data-table/datatables.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/data-table/datatables-init.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/informative/informative.js') }}"></script>
@parent
@stop
