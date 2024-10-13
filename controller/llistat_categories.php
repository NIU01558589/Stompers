<?php

    require_once __DIR__ . '/../model/connectaDb.php';
    require_once __DIR__ . '/../model/categories.php';

    $categories = getCategories();

    include __DIR__ . '/../views/llistat_categories.php';
?>