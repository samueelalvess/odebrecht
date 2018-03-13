@extends('dashboard.base')

@section('css')
<link rel="stylesheet" href="{{ asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
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
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Cidade</th>
            <th class="col-md-1"></th>
          </thead>
          <tbody>
            @foreach($seller as $sellers )
            <tr>
              <td>{{$sellers -> A33_003_C}}</td>
              <td>{{$sellers -> A33_010_C}}</td>
              <td>{{$sellers -> A33_012_C}}</td>
              <td>{{$sellers -> A33_24_C}}</td>
              <td></td>
              <td><button class="btn btn-sm btn-warning"><i class="fa fa-eye"></i> </button></td>
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
