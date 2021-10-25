var totalPagar;
var cantidad;
var categoria;
var total;

function resumen(){
    totalPagar = document.getElementById("totalPagar");
    cantidad = document.getElementById("cantidad2");
    categoria = document.getElementById("categoria").value;

    if (categoria == 1) {
        total = (cantidad.value * 200)*0.2;
    } else if (categoria == 2) {
        total = (cantidad.value * 200)*0.5;
    } else if (categoria == 3) {
        total = (cantidad.value * 200)*0.85;
    }

    console.log(total);
    
    totalPagar.innerText = "Total a Pagar: $" + total;
}
