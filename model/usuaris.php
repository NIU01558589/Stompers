<?php

function insertarDatos($nom, $correu, $contrasenya, $adreca, $poblacio,$codipostal)
{
    $conn=connectaDb();

    $contrasenyaXifrada = password_hash($contrasenya,PASSWORD_DEFAULT);

    $sql= "INSERT INTO usuari (nom, email, password, adreca, poblacio, codi_postal)
        VALUES ($1, $2, $3, $4, $5, $6)";

    $params = array($nom, $correu,$contrasenyaXifrada,$adreca,$poblacio,$codipostal);

    $result= pg_query_params($conn,$sql,$params);

    if ($result !== false) {
        // La consulta fue exitosa
        // Cierra la conexión y retorna true
        pg_close($conn);
        return true;
    } else {
        // Hubo un error en la consulta
        // Cierra la conexión y retorna false
        pg_close($conn);
        return false;
    }
}

?>