// menuScript.js
$(document).ready(function() {
    // Verificar si el usuario ha iniciado sesión (puedes ajustar esto según tu lógica de autenticación)
    var usuarioIniciado = false; // Cambia a true si el usuario ha iniciado sesión

    // Ocultar el menú desplegable inicialmente
    $(".dropdown-content").hide();

    // Mostrar u ocultar el menú desplegable según el estado de inicio de sesión
    if (usuarioIniciado) {
        $(".dropdown").hover(
            function() {
                // Muestra el menú desplegable al pasar el ratón
                $(".dropdown-content").slideDown();
            },
            function() {
                // Oculta el menú desplegable al salir del área
                $(".dropdown-content").slideUp();
            }
        );
    } else {
        // Si el usuario no ha iniciado sesión, simplemente muestra el enlace de inicio de sesión
        $(".btnAccounts").attr("href", "accounts/login.php");
    }
});
