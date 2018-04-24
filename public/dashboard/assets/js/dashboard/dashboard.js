var ctx = document.getElementById('evolutivo').getContext('2d');
var chart = new Chart(ctx, {
    // Tipo do Gráfico
    type: 'bar',

    // Informações para criar o gráfico
    data: {
        labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
        datasets: [{
            label: "Vendas",
            backgroundColor: 'rgb(39, 174, 96)',
            borderColor: 'rgb(46, 204, 113)',
            data: [420, 200, 1260, 2320, 0, 0, 0, 0, 0, 0, 0, 0],
        },
        {
            label: "Pedidos",
            backgroundColor: 'rgb(208, 85, 0)',
            borderColor: 'rgb(236, 85, 0)',
            data: [500, 300, 1560, 2400, 0, 0, 0, 0, 0, 0, 0, 0],
        }]
    },

    // Configurações vão aqui
    options: {}
});
