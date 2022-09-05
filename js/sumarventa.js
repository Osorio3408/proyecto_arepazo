let ventas_realizadas = 0;
let boton_venta = document.getElementById("boton_venta");
let display = document.getElementById("display");


document.addEventListener("submit", boton_venta.onclick = function () {
    event.preventDefault;
    ventas_realizadas++;
    display.innerHTML = ventas_realizadas;
})
