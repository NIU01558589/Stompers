<?php


require_once __DIR__ . '/../model/connectaDb.php';
require_once __DIR__ . '/../model/dades_user.php';

$filesAbsolutePath = '/home/TDIW/tdiw-h11/public_html/profile_img/';

$destinationPath = $filesAbsolutePath . $_SESSION['user_id'].'.jpg';
$relative_path = 'profile_img/'.$_SESSION['user_id'].'.jpg';

if ($_FILES['profile_image'] && !empty($_FILES['profile_image']) !== null) {
     move_uploaded_file(
         $_FILES['profile_image']['tmp_name'],
         $destinationPath
     );
}

$id_usuari_modificacio = $_SESSION['user_id'];
$nom= $_POST['nom'];
$correu= $_POST['correu'];
$contrasenya= $_POST['contrasenya'];
$adreca= $_POST['adreca'];
$poblacio= $_POST['poblacio'];
$codipostal= $_POST['codipostal'];

$codipostal_to_filter = ltrim($codipostal, '0');
$correu_ok = filter_var($correu, FILTER_VALIDATE_EMAIL);
$codipostal_ok = filter_var($codipostal_to_filter, FILTER_VALIDATE_INT);

if ($codipostal_ok && $correu_ok) {
    $result = updateUser(
        $id_usuari_modificacio,
        $correu_ok,
        $nom,
        $contrasenya,
        $adreca,
        $poblacio,
        $codipostal_ok,
        $relative_path
    );
}

if ($result) {
    header('Location: modify_account.php?result=yes');
}
else {
    header('Location: modify_account.php?result=no');
}

?>