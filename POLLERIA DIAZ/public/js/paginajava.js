
function abrirModal(producto) {
    var modal = document.getElementById("modal");
    var tituloModal = document.getElementById("modal-titulo");
    var productoSeleccionado = document.getElementById("producto-seleccionado");

    tituloModal.textContent = "Confirmar Compra";
    productoSeleccionado.textContent = "Producto seleccionado: " + producto;

    modal.style.display = "block";
}

function cerrarModal() {
    var modal = document.getElementById("modal");
    modal.style.display = "none";
}

function confirmarCompra() {
    var modal = document.getElementById("modal");
    var cantidad = document.getElementById("cantidad").value;
    var metodoPago = document.getElementById("metodo-pago").value;

    modal.style.display = "none";
}
