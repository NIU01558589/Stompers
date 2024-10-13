<?php

require_once __DIR__ . '/../model/connectaDb.php';
require_once __DIR__ . '/../model/dades_user.php';

$usuari = $_SESSION['user_id'];

$infoUsuari = getInfoUsuariById($usuari);

include __DIR__ . '/../views/dades_usuari_mostrar.php';

?>