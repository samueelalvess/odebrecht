$( ".printorder" ).click(function() {

var imprimir=document.getElementById('printorder');

var newWin=window.open('','Print-Window');

newWin.document.open();

newWin.document.write('<html><body onload="window.print()">'+imprimir.innerHTML+'</body></html>');

newWin.document.close();

setTimeout(function(){newWin.close();},10);

});
