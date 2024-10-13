<?php


if (!isset($_SESSION['total_productes'])) {
    // Si no existe, asignar valores por defecto
    $_SESSION['total_productes'] = array(
        'total_items' => 0,
        'total_diners' => 0,
        'info_producte' => array()
    );

    $nuevo_producto = array(
        'id' => $_SESSION['producte']['id'],
        'nom' => $_SESSION['producte']['nom'],
        'preu' => $_SESSION['producte']['preu'],
        'foto' => $_SESSION['producte']['imatge_principal'],
        'quantitat' => $_SESSION['qty']
    );

    $_SESSION['total_productes']['info_producte'][] = $nuevo_producto; //comentar despues
    $_SESSION['total_productes']['total_items'] += $nuevo_producto['quantitat'];
    $_SESSION['total_productes']['total_diners'] += ($nuevo_producto['preu']*$nuevo_producto['quantitat']);

}
else
{
    $id_producto = $_SESSION['producte']['id'];
    $index = array_search($id_producto, array_column($_SESSION['total_productes']['info_producte'], 'id')); //comentar despues

    if ($index !== false) {
        // El producto ya existe en el carrito
        //$hi_ha_coincidencia = true;
        $_SESSION['total_productes']['info_producte'][$index]['quantitat'] += $_SESSION['qty'];
        $_SESSION['total_productes']['total_items'] += $_SESSION['qty'];
        $_SESSION['total_productes']['total_diners'] += ($_SESSION['producte']['preu'] * $_SESSION['qty']);
    } else {
        // El producto no existe en el carrito, añadirlo
        $nuevo_producto = array(
            'id' => $_SESSION['producte']['id'],
            'nom' => $_SESSION['producte']['nom'],
            'preu' => $_SESSION['producte']['preu'],
            'foto' => $_SESSION['producte']['imatge_principal'],
            'quantitat' => $_SESSION['qty']
        );

        $_SESSION['total_productes']['info_producte'][] = $nuevo_producto;
        $_SESSION['total_productes']['total_items'] += $nuevo_producto['quantitat'];
        $_SESSION['total_productes']['total_diners'] += ($nuevo_producto['preu'] * $nuevo_producto['quantitat']);
    }
}
unset($_SESSION['producte']);
unset($_SESSION['qty']);
require_once __DIR__ . '/views/resposta_ok_carrito.php';


?>