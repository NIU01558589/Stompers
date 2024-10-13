<?php

require_once __DIR__ . '/../model/connectaDb.php';
require_once __DIR__ . '/../model/consultaComanda.php';

if(isset($_SESSION['user_id']))
{
    $id_usuari = $_SESSION['user_id'];
    $info_comanda = veureHistoricProductesComanda($id_usuari);
}

include __DIR__ . '/../views/productesHistory.php';

?>