<?php

/**
 * @return array
 */

require_once 'connectaDb.php';

function getCategories(): array
{
    $conn = connectaDb();
    $sql = 'SELECT * FROM categoria';
    $stmt = pg_query($conn,$sql);
    $filas = pg_fetch_all($stmt);
    //var_dump($filas);
    //$stmt -> execute();

    return $filas;
}

function getCategoriesById(int $categoryId): array
{
    $conn = connectaDb();
    $sql = "SELECT id, nom 
            FROM categoria 
                WHERE id = $categoryId";

    $result= pg_query($conn,$sql);

    $products= pg_fetch_all($result);
    return $products;
}

?>