<?php

function validar_compte($usuari, $contrasenya) {

    $conn = connectaDb();

    $sql = "SELECT id, email, password FROM usuari WHERE email=$1 LIMIT 1";
    $params = [$usuari];
    $result = pg_query_params($conn,$sql,$params);

    $array_elements = pg_fetch_all($result);

    if ($array_elements) {

        $var = password_verify($contrasenya, $array_elements[0]["password"]);
        if($var) {
            return $array_elements[0];
        }
        else
        {
            return false;
        }

    }
    else {
        return false;
    }
}
?>