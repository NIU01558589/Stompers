<?php

require_once __DIR__ . '/../model/connectaDb.php';
require_once __DIR__ . '/../model/log-in-model.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filters = filter_input_array(
        INPUT_POST,
        [
            'email'=>FILTER_DEFAULT,
            'password' => FILTER_DEFAULT,
        ]
    );

    $usuari = $filters['email'];
    $contrasenya = $filters['password'];

    $user = validar_compte($usuari,$contrasenya);
    if($user) {
        $_SESSION['user_id'] = $user['id'];
    }

    require __DIR__.'/../views/login_result.php';
    return;
}

include __DIR__ . '/../views/mi_cuenta.php';

?>