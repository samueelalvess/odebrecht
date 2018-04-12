
$(document).ready(function() {
// carrega a table no datatable
  $('#productList').DataTable( {
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

      $('.valor').maskMoney();
} ); // -> DOCUMENT READY


// INICIA ADICIONAR E REMOVER QUANTIDADE
$('.btn-number').click(function(e){
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {

            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {

    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());

    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }


});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
// FIM ADICIONAR E REMOVER QUANTIDADE

// ADICIONAR AO CARRINHO
function adiciona(cod, desc, qtd, valor, total) {

  {
           $('#carrinhobody').append(
             '<tr>'+
                           '<td>'+cod+'</td>'+
                           '<td>'+desc+'</td>'+
                           '<td>'+

                                     '<input type="text" name="quantc[5]" class="form-control input-number" value="'+qtd+'" min="1" max="10">'+

                           '</td>'+
                           '<td>'+
                             '<div class="input-group">'+
                               '<span class="input-group-addon" id="basic-addon1">R$</span>'+
                               '<input type="text" class="form-control" value="'+valor+'">'+
                             '</div>'+
                           '</td>'+
                          '<td align="center">'+
                             '<div class="input-group">'+
                               '<label>R$ '+total+'</label>'+
                             '</div>'+
                           '</td>'+
                           '<td>'+
                             '<button class="btn btn-danger pull-right" style="border-radius:0px;" onclick="removelinha(this,\''+cod+'\')"><i class="fa fa-trash"></i></button>'+
                          ' </td>'+
                         '</tr>');

   }
   var v1 = $('#totaltxt').text();
   totall = total;

   totaltxt = v1.replace('.','');
   totaltxt = v1.replace(',','.');

   total = totall.replace('.','');
   total = totall.replace(',','.');
   var somar = parseFloat(totaltxt) + parseFloat(total);

   $('#totaltxt').text(somar);
   var item = cod+':'+desc+':'+qtd+':'+valor+':'+total+'/';
   var cookie = getCookie('teste');
   item += cookie;
   setCookie('carrinho',item,'1');



}


function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function removelinha(obj,cod) {
  var cookie = getCookie('carrinho');
  cookie = cookie.split('/');
  var item_remove = '';
  for (var i = 0; i < cookie.length; i++) {
    var cc = cookie[i].split(':');
    if (cc[0] != cod && cc[0] != '')
    {
      item_remove += cookie[i]+'/';

    }
  }
  setCookie('carrinho',item_remove,'1');

  $(obj).closest('tr').remove();
  $.notify({
      icon: 'fa fa-times',
      message: "O item foi removido do carrinho."
    },{
        type: 'danger',
        timer: 1000
    });


}

function multiplica(v1,v2)
{
	v1 = v1.replace('.','');
	v1 = v1.replace(',','.');

	v2 = v2.replace('.','');
	v2 = v2.replace(',','.');

	var multiplicar = parseFloat(v1) * parseFloat(v2);
	return multiplicar.toLocaleString("pt-BR");

}

$(function(){
    $(document).on('click', '.btncarrinho', function(e) {
        e.preventDefault;
        var cod = $(this).closest('tr').find('td[data-cod]').data('cod');
        var desc = $(this).closest('tr').find('td[data-desc]').data('desc');
        var qtd = $('#qtd-'+cod).val();
        var valor = $('#valor-'+cod).val();
        if(qtd > 1) {
        total = multiplica(qtd,valor);
        } else {
          total = valor;
        }
        if(valor != '') {
          $.notify({
              icon: 'fa fa-check',
              message: " O produto <b>"+desc+"</b> foi adicionado com sucesso ao carrinho."
            },{
                type: 'success',
                timer: 1000
            });

            // adiciona a tabela
          adiciona(cod.trim(), desc.trim(), qtd.trim(), valor.trim(), total);

            //

        } else {
          swal("Alerta", "Por favor, preencha o valor do produto!", "warning")
        }
    });
});
