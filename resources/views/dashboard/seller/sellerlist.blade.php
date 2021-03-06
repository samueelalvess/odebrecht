@extends('dashboard.base')

@section('css')
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
@parent
@stop

@section('title', 'Vendedores')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Vendedores</h2>

        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <table class="table table-responsive table-striped table-hover" id="sellerList">
          <thead>
            <th>Documento</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Cidade</th>
            <th>Sistema Pedidos</th>
            <th class="col-md-1 text-center"><i class="fa fa-cogs"></i></th>
          </thead>
          <tbody>
            @foreach($seller as $sellers )
            <tr>
              <td>{{$sellers -> UKEY}}</td>
              <td>{{$sellers -> A33_003_C}}</td>
              <td>{{$sellers -> A33_012_C}}</td>
              <td>{{$sellers -> A33_024_C}}</td>
              <td>{{$sellers -> A24_001_C}}</td>
              <td>
                @if (empty($sellers->id))
                <label class="label label-danger">Não Vinculado</label>
                @else
                <label class="label label-success">Vinculado</label>
                @endif
              </td>
              <td>
                <a href="{{ route('sellerData', ['id' => trim($sellers->UKEY)]) }}"><button class="btn btn-xs btn-warning" style="border-radius:0px" title="Ver Dados"><i class="fa fa-eye"></i> </button></a>
                @if (empty($sellers->id))
                <a href="{{ route('linkSeller', ['id' => trim($sellers->UKEY)]) }}"><button class="btn btn-xs btn-success" style="border-radius:0px" title="Vincular"><i class="fa fa-exchange"></i> </button></a>
                @else
                <a href="{{ route('linksellerEdit', ['id' => trim($sellers->UKEY)]) }}"><button class="btn btn-xs btn-warning" style="border-radius:0px" title="Editar Login"><i class="fa fa-pencil"></i> </button></a>
                @endif
              </td>
            </tr>
            @endforeach

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
<script src="{{ asset('dashboard/assets/js/seller/seller.js') }}"></script>
@parent
@stop
