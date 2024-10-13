<?php
error_reporting(E_ERROR | E_PARSE);

// Recupera el resultado de la sesión
$exit = isset($_SESSION['registro_exitoso']) ? $_SESSION['registro_exitoso'] : false;

// Borra la variable de sesión para evitar problemas en futuras recargas de la página
unset($_SESSION['registro_exitoso']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <link rel="stylesheet" href="../css/viewregister.css"/>
    <title>Resultado del Registro</title>
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">

</head>
<body>

<a href="../index.php">
    <img src="../img/stompers-white.png" />
</a>
<h2>Resultado del Registro</h2>

<?php
// Verificar el valor de $exit y ejecutar JavaScript correspondiente
if ($exit) {
    echo "<h3>Registro exitoso</h3>";
    echo "<script> alert('Registro exitoso.'); </script>";
} else {
    echo "<h3>Registro no exitoso</h3>";
    echo "<script> alert('Error al registrar el usuario. Por favor, inténtalo de nuevo.'); </script>";
}
?>

</body>
</html>
