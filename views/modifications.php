<?php

session_start();

$action = '';
$product_id = '';

if(isset($_GET['action']))
{
    $action = $_GET['action'];
}

if(isset($_GET['producto_id']))
{
    $product_id = $_GET['producto_id'];
}

switch($action) {
    case 'quitar':
        foreach ($_SESSION['total_productes']['info_producte'] as $indice => $producto) {
            // Verificar si el producto actual tiene el ID que deseas eliminar
            if ($producto['id'] == $product_id) {
                // Eliminar el producto del array
                unset($_SESSION['total_productes']['info_producte'][$indice]);

                // Restar la cantidad y el dinero correspondientes
                $_SESSION['total_productes']['total_items'] -= $producto['quantitat'];
                $_SESSION['total_productes']['total_diners'] -= ($producto['preu'] * $producto['quantitat']);

                // Redirigir a la página del carrito o a donde desees después de eliminar el producto
                header("Location: https://tdiw-h11.deic-docencia.uab.cat/views/carrito.php");
            }
        }
    break;
    case 'sumar':
        if (isset($_SESSION['total_productes']['info_producte'])) {
            foreach ($_SESSION['total_productes']['info_producte'] as &$producto) {
                if ($producto['id'] == $product_id) {
                    $producto['quantitat']++;
                    $_SESSION['total_productes']['total_items']++;
                    $_SESSION['total_productes']['total_diners'] += $producto['preu'];
                    break; // Detener el bucle una vez que se haya encontrado el producto
                }
            }
        }
        header("Location: https://tdiw-h11.deic-docencia.uab.cat/views/carrito.php");
        break;
    case 'restar':
        if (isset($_SESSION['total_productes']['info_producte'])) {
            foreach ($_SESSION['total_productes']['info_producte'] as &$producto) {
                if ($producto['id'] == $product_id && $producto['quantitat'] > 1) {
                    $producto['quantitat']--;
                    $_SESSION['total_productes']['total_items']--;
                    $_SESSION['total_productes']['total_diners'] -= $producto['preu'];
                    break; // Detener el bucle una vez que se haya encontrado el producto
                }
            }
        }
        header("Location: https://tdiw-h11.deic-docencia.uab.cat/views/carrito.php");
        break;
    case 'vaciar_carrito':
        $_SESSION['total_productes']['info_producte'] = array();
        $_SESSION['total_productes']['total_diners'] = 0;
        $_SESSION['total_productes']['total_items'] = 0;
        header("Location: https://tdiw-h11.deic-docencia.uab.cat/views/carrito.php");
        break;
    case 'compra_finalitzada':
        $_SESSION['total_productes']['info_producte'] = array();
        $_SESSION['total_productes']['total_diners'] = 0;
        $_SESSION['total_productes']['total_items'] = 0;
        header("Location: https://tdiw-h11.deic-docencia.uab.cat/views/confirmacio_compra.php");
        break;
    default:
        break;

}

?>