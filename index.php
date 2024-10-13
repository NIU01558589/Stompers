<?php

session_start();

require_once __DIR__.'/base-url-config.php';

$action = '';

if(isset($_GET['action']))
{
    $action = $_GET['action'];
}

switch($action) {
    case 'categories':
        include __DIR__ . '/resource_marques.php';
        break;
    case 'productes_categoria':
        require __DIR__ . '/resource_productes.php';
        break;
    case 'detall_marca':
        require __DIR__ . '/controller/detall_producte.php';
        break;
    case 'registre':
        require __DIR__ . '/accounts/register.php';
        break;
    case 'log_in':
        require __DIR__ . '/controller/mi_cuenta.php';
        break;
    case 'logout':
        require __DIR__ . '/views/logout_result.php';
        break;
    case 'addCart':
        if(isset($_POST['qty']))
        {
            $_SESSION['qty'] = $_POST['qty'];
            require __DIR__ . '/addCart.php';
        }
        break;
    case 'modifyData':
        require __DIR__ . '/controller/modificar_dades.php';
    default:
        break;

}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <title>Stompers</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="desplegable.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!--CAPÇALERES INICI SESSIO-->
    <script src="/views/missatgeLogin.js"></script>
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
    <a href="resource_marques.php?action=categories">
        <img class = "wallpapers" src="img/wallpaper-maserati.gif" alt="Maserati_Wallpaper">
    </a>
    <a href="#">
        <img class = "wallpapers" src="img/alfa-romeo-wallpaper.gif" alt="Maserati_Wallpaper">
    </a>
    <a href="#">
        <img class = "wallpapers" src="img/porsche-wallpaper.gif" alt="Maserati_Wallpaper">
    </a>
    <footer>
        <P>&copy Stompers</P>
    </footer>
</body>
</html>