<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Categorías</title>
</head>
<body>

<?php if (empty($categories)): ?>
    <p>No hay categorías disponibles.</p>
<?php else: ?>
    <?php foreach ($categories as $index => $category): ?>
        <div onclick="detallProductes(<?php echo $category['id']?>)" style="grid-column: <?php echo ($index % 3) + 1; ?>; grid-row: <?php echo floor($index / 3) + 1; ?>">
            <a>
                <img src="<?php echo $category['imatge']; ?>" alt="<?php echo htmlentities($category['nom'], ENT_QUOTES, 'UTF-8'); ?>" class="img" />
            </a>
            <h1><?php echo htmlentities($category['nom'], ENT_QUOTES, 'UTF-8'); ?></h1>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>