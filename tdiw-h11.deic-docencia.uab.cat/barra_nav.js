$(document).ready(function() {
    // Mostrar/ocultar menú desplegable d'usuari
    $(".user-options").click(function() {
        $(".dropdown-menu").toggle();
    });

    // Exemple: Simular l'estat d'inici de sessió
    var isLoggedIn = false;

    // Actualitzar opcions del menú en funció de l'estat d'inici de sessió
    function updateMenuOptions() {
        if (isLoggedIn) {
            $("#user-menu-trigger").text("Usuari");
            $("#my-account").show();
            $("#my-purchases").show();
            $("#logout").show();
        } else {
            $("#user-menu-trigger").text("Iniciar sessió");
            $("#my-account").hide();
            $("#my-purchases").hide();
            $("#logout").hide();
        }
    }

    // Exemple: Canviar estat d'inici de sessió amb un clic
    //$("#user-menu-trigger").click(function() {
     //   isLoggedIn = !isLoggedIn;
     //   updateMenuOptions();
   // });

   // // Inicialitzar les opcions del menú
  //  updateMenuOptions();
});
