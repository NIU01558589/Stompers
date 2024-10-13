<?php

require_once __DIR__ . '/../model/connectaDb.php';
require_once __DIR__ . '/../model/productes.php';

$productId= $_GET['product_id'];

$infoProducte= getInfoProducteById($productId);

include __DIR__ . '/../views/detall_producte.php';

?>