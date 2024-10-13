<?php

function veureHistoricProductesComanda($id_usuari)
{
    $conn = connectaDb();
    $sql = "select a.id, a.data_creacio, a.numero_elements, a.import_total, a.usuari_id,
b.nom_producte, b.quantitat, b.preu_unitari, b.preu_total, b.comanda_id, b.producte_id
from comanda a left join linia_comanda b on a.id = b.comanda_id where a.usuari_id = $id_usuari
order by b.comanda_id";

    $res_comanda = pg_query($conn, $sql);

    $info = pg_fetch_all($res_comanda);

    return $info;
}

?>