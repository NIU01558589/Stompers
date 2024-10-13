<?php

session_start();

require_once __DIR__ . '/../model/connectaDb.php';
require_once __DIR__ . '/../model/comanda.php';

if (isset($_SESSION['user_id']))
{
    $total_items = $_SESSION['total_productes']['total_items'];
    $total_diners = $_SESSION['total_productes']['total_diners'];
    $usuario_id = $_SESSION['user_id'];

    $id_comanda = crearComanda($total_items, $total_diners, $usuario_id);

    if(isset($id_comanda))
    {
        $productes_carrito = $_SESSION['total_productes']['info_producte'];
        foreach ($productes_carrito as $producte):
            $producte_id = $producte['id'];
            $producte_nom = $producte['nom'];
            $producte_quantitat = $producte['quantitat'];
            $producte_preuTotal = $producte['preu'] * $producte_quantitat;
            $producte_preuUnitari = $producte['preu'];

            $res = AfegirProductesComanda($producte_id, $producte_nom,
            $producte_quantitat, $producte_preuTotal, $producte_preuUnitari,
            $id_comanda);

            if($res)
            {
                continue;
            }
            else
            {
                break;
            }
        endforeach;
    }

    header('Location: /views/modifications.php?action=compra_finalitzada');

}
else
{
    //mostrar que no hay iniciada sesion, que la inicie.
}


?>