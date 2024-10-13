<?php
function connectaDb(){
    $servidor = "127.0.0.1";
    $DBnom = "tdiw-h11";
    $usuari = "tdiw-h11";
    $clau = "LZX86Hv5";
    $connexio = pg_connect("host=$servidor dbname=$DBnom
 user=$usuari password=$clau") or die("Error connexio DB");
    return($connexio);
}

?>