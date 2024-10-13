async function detallProductes(valor){
    //var tagGraus = document.getElementById("contenidor");
    const resp = await fetch("controller/llistat_productes_categoria.php?category_id=" + valor);
    //document.getElementById("mencions").innerHTML = respostaTxt;
    if (resp.ok) {
        // Obtén el texto de la respuesta
        const respostaTxt = await resp.text();

        // Actualiza el contenido en algún lugar de tu documento HTML (por ejemplo, un div con id "mencions")
        document.getElementById("contenidor").innerHTML = respostaTxt;
    } else {
        // Maneja el caso en que la solicitud no fue exitosa
        console.error("Error en la solicitud:", resp.status, resp.statusText);
    }
}

async function detallProduct(valorIdProducte){

    const resp = await fetch("controller/detall_producte.php?product_id=" + valorIdProducte);

    if (resp.ok) {
        // Obtén el texto de la respuesta
        const respostaTxt = await resp.text();

        // Actualiza el contenido en algún lugar de tu documento HTML (por ejemplo, un div con id "mencions")
        document.getElementById("paginaId").innerHTML = respostaTxt;
    } else {
        // Maneja el caso en que la solicitud no fue exitosa
        console.error("Error en la solicitud:", resp.status, resp.statusText);
    }
}
