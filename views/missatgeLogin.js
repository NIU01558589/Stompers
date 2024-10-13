function hideMessage() {
    var mensaje = document.getElementById('mensaje');
    setTimeout(function () {
        mensaje.style.display = 'none';
    }, 5000); // 5000 milisegundos = 5 segundos
}