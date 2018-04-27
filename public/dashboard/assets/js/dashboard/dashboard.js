var ctx = document.getElementById('evolutivo').getContext('2d');
// VARIAVEIS VENDAS
var janeiro = $('meta[name=Janeiro_vendas]').attr('content');
var fevereiro = $('meta[name=Fevereiro_vendas]').attr('content');
var marco = $('meta[name=Março_vendas]').attr('content');
var abril = $('meta[name=Abril_vendas]').attr('content');
var maio = $('meta[name=Maio_vendas]').attr('content');
var junho = $('meta[name=Junho_vendas]').attr('content');
var julho = $('meta[name=Julho_vendas]').attr('content');
var agosto = $('meta[name=Agosto_vendas]').attr('content');
var setembro = $('meta[name=Setembro_vendas]').attr('content');
var outubro = $('meta[name=Outubro_vendas]').attr('content');
var novembro = $('meta[name=Novembro_vendas]').attr('content');
var dezembro = $('meta[name=Dezembro_vendas]').attr('content');
// VARIAVEIS PEDIDOS
var janeiro_ = $('meta[name=Janeiro_pedidos]').attr('content');
var fevereiro_ = $('meta[name=Fevereiro_pedidos]').attr('content');
var marco_ = $('meta[name=Março_pedidos]').attr('content');
var abril_ = $('meta[name=Abril_pedidos]').attr('content');
var maio_ = $('meta[name=Maio_pedidos]').attr('content');
var junho_ = $('meta[name=Junho_pedidos]').attr('content');
var julho_ = $('meta[name=Julho_pedidos]').attr('content');
var agosto_ = $('meta[name=Agosto_pedidos]').attr('content');
var setembro_ = $('meta[name=Setembro_pedidos]').attr('content');
var outubro_ = $('meta[name=Outubro_pedidos]').attr('content');
var novembro_ = $('meta[name=Novembro_pedidos]').attr('content');
var dezembro_ = $('meta[name=Dezembro_pedidos]').attr('content');

var chart = new Chart(ctx, {
    // Tipo do Gráfico
    type: 'bar',

    // Informações para criar o gráfico

    data: {
        labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
        datasets: [{
            label: " Pedidos Faturados",
            backgroundColor: 'rgb(39, 174, 96)',
            borderColor: 'rgb(46, 204, 113)',
            data: [janeiro, fevereiro, marco, abril, maio, junho, julho, agosto, setembro, outubro, novembro, dezembro],
        },
        {
            label: " Pedidos Não Faturados",
            backgroundColor: 'rgb(208, 85, 0)',
            borderColor: 'rgb(236, 85, 0)',
            data: [janeiro_, fevereiro_, marco_, abril_, maio_, junho_, julho_, agosto_, setembro_, outubro_, novembro_, dezembro_],
        }]
    },

    // Configurações vão aqui
    options: {}
});
