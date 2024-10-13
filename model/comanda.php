<?php

function crearComanda($total_items, $total_diners, $usuario_id)
{
    $conn = connectaDb();

    $id_generate = uniqid();
    $act_time = date("Y-m-d H:i:s");

    $sql = "INSERT INTO comanda (id, data_creacio, numero_elements, import_total, usuari_id)
            VALUES ($1, $2, $3, $4, $5)";
    $params = [$id_generate, $act_time, $total_items, $total_diners, $usuario_id];

    $res_query = pg_query_params($conn, $sql, $params);

    if($res_query) {
        return $id_generate;
    }
    else
    {
        return null;
    }
}

function AfegirProductesComanda($producte_id, $producte_nom,
    $producte_quantitat, $producte_preuTotal, $producte_preuUnitari,
    $id_comanda)
{
    $conn = connectaDb();

    $sql = "INSERT INTO linia_comanda (id, nom_producte, quantitat, preu_unitari,
                     preu_total, comanda_id, producte_id)
            VALUES ($1, $2, $3, $4, $5, $6, $7)";

    $id_linia_comanda_generate = uniqid();

    $params = [$id_linia_comanda_generate, $producte_nom,
        $producte_quantitat, $producte_preuUnitari,
        $producte_preuTotal, $id_comanda, $producte_id];

    $res_query = pg_query_params($conn, $sql, $params);

    if($res_query)
    {
        return true;
    }
    else
    {
        return false;
    }
}

?>