function screen_validate() {
    //Obtenim l'element a traves del seu Id
    var div = document.getElementById("Form");

    //creem un paragraf
    var nuevoParrafo = document.createElement("p");
    //inserim el contingut del paràgraf
    nuevoParrafo.textContent = "T'has registrat amb èxit";
    //afegim la classe d'estil CSS p.important
    nuevoParrafo.classList.add("textoConfirma");

    //neteja el contingut existent a l'element div
    div.innerHTML = "";
    //insereix el nou paragraf creat
    div.appendChild(nuevoParrafo);

    return false;
}