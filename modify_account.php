<?php
 session_start();

$action = '';

if(isset($_GET['result']))
{
    $action = $_GET['result'];
}

switch($action) {
    case 'yes':
        include __DIR__ . '/views/modify-data-success.php';
        break;
    case 'no':
        require __DIR__ . '/views/modify-data-error.php';
        break;
    default:
        break;
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <link rel="stylesheet" href="css/modify_accounts.css"/>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="desplegable.js"></script>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <script src="views/missatgeLogin.js"></script>
</head>
<body>
    <nav class="navigation">
        <a href="index.php">
            <img id="logo_stompers" src="img/stompers-white.png" />
        </a>
        <ul class="menu">
            <li><a class="menuEffect" href="resource_marques.php">Marques</a></li>
            <li id="carrito_quantity">
                <div id="figura_carrito">
                    <a href="views/carrito.php">
                        <ion-icon name="cart-outline"></ion-icon>
                        <?php
                        // Mostrar el número de elementos en el carrito
                        if(isset($_SESSION['total_productes']))
                        {
                            if ($_SESSION['total_productes']['total_items'] >= 0) {
                                echo '<span class="cart-count">' . $_SESSION['total_productes']['total_items'] . '</span>';
                            }
                        }
                        else
                        {
                            echo '<span class="cart-count">' . 0 . '</span>';
                        }
                        ?>
                    </a>
                    <p id="text_money">
                        <?php

                        if(isset($_SESSION['total_productes']['total_diners'])) {
                            echo $_SESSION['total_productes']['total_diners'] . '€';
                        }
                        else
                        {
                            echo '0€';
                        }

                        ?>
                    </p>
                </div>
            </li>
            <li class="opcion-submenu">
                <a class="btnAccounts" href = "#"><ion-icon name="person-outline"></ion-icon></a>
                <ul class="dropdown-content">
                    <?php if (isset($_SESSION['user_id'])) { ?>
                        <li><a href="modify_account.php">El meu compte</a></li>
                        <li><a href="history_orders.php">Les meves compres</a></li>
                        <li><a href="accounts/logout.php">Tancar sessió</a></li>
                    <?php } else { ?>
                        <li class="login-option"><a href="accounts/log-in.php">Iniciar sessió</a></li>
                        <li class="login-option"><a href="accounts/register.php">Registre</a></li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="data_account">
        <?php require __DIR__.'/controller/dades_usuari.php'; ?>
    </div>
</body>
</html>