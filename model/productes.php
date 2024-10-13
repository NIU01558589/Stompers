<?php

/**
 * @param int $categoryID
 *
 * @return array
 */

function getProductsByCategory(int $categoryID): array
{
    $conn= connectaDb();

    $sql = "SELECT id, nom, imatge_principal, preu, categoria_id
                FROM producte
                WHERE categoria_id = $categoryID";

    $result= pg_query($conn,$sql);
    $products= pg_fetch_all($result);
    return $products;
}

?>
<?php

function getInfoProducteById(int $idProducte): array
{
    $conn= connectaDb();

    $sql = "SELECT id, nom, descripcio, imatge_principal, imatge_red, imatge_white, preu
                FROM producte
                WHERE id = $idProducte";
    $result= pg_query($conn,$sql);
    $infoProducte= pg_fetch_all($result);
    return $infoProducte;
}

?>
