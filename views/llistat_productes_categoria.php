<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Categorías</title>
</head>
<body>

<?php if (empty($productes)): ?>
    <p>No hay Productos disponibles.</p>
<?php else: ?>
    <?php foreach ($productes as $index => $id): ?>
        <div onclick="detallProduct(<?php echo $id['id']?>)" style="grid-column: <?php echo ($index % 3) + 1; ?>; grid-row: <?php echo floor($index / 3) + 1; ?>">
            <a>
                <img src="<?php echo $id['imatge_principal']; ?>" alt="<?php echo $id['nom']; ?>" class="img" />
            </a>
            <h1><?php echo $id['nom']; ?></h1>
            <h2>Preu: <?php echo $id['preu'];?>€</h2>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>