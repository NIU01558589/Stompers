<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llistat de productes</title>
</head>
<body>

<?php if (empty($info_comanda)): ?>
    <p id="paragrafNoProducte">No hay Productos en el historial.</p>
<?php else: ?>
    <?php
    $grouped_comanda = [];

    // Agrupem els items segons el seu id de comanda"
    foreach ($info_comanda as $pedido) {
        $grouped_comanda[$pedido['id']][] = $pedido;
    }

    foreach ($grouped_comanda as $id_aux_comanda => $pedidos):
        echo '<div class="producte_history">';
        echo '<p><b>Numero de comanda: ' . $id_aux_comanda . '</b></p>';
        echo '<p><b>Data de creació de la comanda: ' . $pedidos[0]['data_creacio'] . '</b></p>';
        echo '<br/>';

        foreach ($pedidos as $pedido):
            echo '<div class=info-item>';
            echo '<p>Model: ' . $pedido['nom_producte'] . '</p>';
            echo '<p>Preu: ' . $pedido['preu_total'] .'</p>';
            echo '<p>Quantitat: ' . $pedido['quantitat'] . '</p>';
            echo '</div>';
            echo '<br/>';
        endforeach;

        // Calculem el preu total de la comanda y la quantitat total
        $total_price = array_sum(array_column($pedidos, 'preu_total'));
        $total_quantity = array_sum(array_column($pedidos, 'quantitat'));

        echo '<h2>Preu total: ' . $total_price . '€</h2>';
        echo '<p>Quantitat total: ' . $total_quantity . '</p>';
        echo '</div>';
        echo '<hr/>';

    endforeach;
endif; ?>

</body>
</html>
