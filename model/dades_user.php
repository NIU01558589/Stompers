<?php

function getInfoUsuariById($usuari) {

    $conn = connectaDb();

    $sql = "SELECT id, email, nom, adreca, poblacio, codi_postal, foto_user 
            FROM usuari 
            WHERE id=$usuari";

    $result = pg_query($conn,$sql);

    $info_usuari = pg_fetch_all($result);
    return $info_usuari;
}

function updateUser($id_usuari_modificacio, $correu_ok, $nom, $contrasenya, $adreca, $poblacio, $codipostal_ok, $destinationPath): bool
{
    $conn = connectaDb();

    if(isset($contrasenya))
    {
        $contrasenyaXifrada = password_hash($contrasenya,PASSWORD_DEFAULT);

        $sql = "UPDATE usuari
            SET email=$1, nom=$2, 
                password=$3, adreca=$4, 
                poblacio=$5, codi_postal=$6, foto_user=$7
            WHERE id=$8";
        $params = [$correu_ok, $nom, $contrasenyaXifrada, $adreca, $poblacio, $codipostal_ok, $destinationPath, $id_usuari_modificacio];
    }
    else
    {
        $sql = "UPDATE usuari
            SET email=$1, nom=$2, 
                adreca=$4, 
                poblacio=$5, codi_postal=$6, foto_user=$7
            WHERE id=$8";
        $params = [$correu_ok, $nom, $adreca, $poblacio, $codipostal_ok, $destinationPath, $id_usuari_modificacio];
    }


    $res_query = pg_query_params($conn, $sql, $params);

    if($res_query) {
        return true;
    }
    else {
        return false;
    }
}
?>