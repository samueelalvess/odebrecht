
$(document).ready(function() {
// carrega a table no datatable
  $('#notbilledList').DataTable( {
    "language":
    {
    "sEmptyTable": "Nenhum registro encontrado",
    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
    "sInfoPostFix": "",
    "sInfoThousands": ".",
    "sLengthMenu": "_MENU_ resultados por página",
    "sLoadingRecords": "Carregando...",
    "sProcessing": "Processando...",
    "sZeroRecords": "Nenhum registro encontrado",
    "sSearch": "Pesquisar",
    "oPaginate": {
        "sNext": "Próximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast": "Último"
    },
    "oAria": {
        "sSortAscending": ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
    }
}
}
  );

} ); // -> DOCUMENT READY

$( ".libaut" ).click(function() {
  location.reload();
});

$( ".bloq" ).click(function() {
  location.reload();
});

$( ".libman" ).click(function() {
  location.reload();
});

$( ".rejei" ).click(function() {
  location.reload();
});
