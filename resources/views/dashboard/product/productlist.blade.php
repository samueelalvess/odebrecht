@extends('dashboard.base')

@section('css')
<link rel="stylesheet" href="{{ asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
@parent
@stop

@section('title', 'Produtos')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Produtos</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <table class="table table-responsive table-striped table-hover" id="productList">
          <thead>
            <th>Cód</th>
            <th>Descrição</th>
            <th>Estoque</th>
            <th>Valor Sug.</th>
          </thead>
          <tbody>

            <tr>
              <td>00001</td>
              <td>Café Solúvel Odebrecht</td>
              <td>1043 un</td>
              <td><label class="badge bdg-green">R$ 10,50</label></td>
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
<script src="{{ asset('dashboard/assets/js/product/product.js') }}"></script>
@parent
@stop
