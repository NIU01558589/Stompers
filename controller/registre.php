<?php

require_once __DIR__ . '/../model/connectaDb.php';
require_once __DIR__ . '/../model/usuaris.php';

$nom= $_POST['nom'];
$correu= $_POST['correu'];
$contrasenya= $_POST['contrasenya'];
$adreca= $_POST['adreca'];
$poblacio= $_POST['poblacio'];
$codipostal= $_POST['codipostal'];

$codipostal_to_filter = ltrim($codipostal, '0');
$correu_ok = filter_var($correu, FILTER_VALIDATE_EMAIL);
$codipostal_ok = filter_var($codipostal_to_filter, FILTER_VALIDATE_INT);

if ($codipostal_ok && $correu_ok) {
    $exit=insertarDatos($nom,$correu,$contrasenya,$adreca,$poblacio,$codipostal);

    session_start();
    $_SESSION['registro_exitoso'] = $exit;
} else {
    echo "Les dades introduïdes no són vàlides. Torna enrere i verifica les dades.";
}


include __DIR__ . '/../views/registre.php';
?>