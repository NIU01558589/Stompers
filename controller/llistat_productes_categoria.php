<?php

require_once __DIR__ . '/../model/connectaDb.php';
require_once __DIR__ . '/../model/productes.php';

$categoryId= $_GET['category_id'];

$productes= getProductsByCategory($categoryId);


include __DIR__ . '/../views/llistat_productes_categoria.php';

?>