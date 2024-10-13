<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dades Usuari</title>
</head>
<body>
<?php if (empty($infoUsuari)): ?>
    <p>Error: no hi ha dades disponibles</p>
<?php else: ?>
    <?php foreach ($infoUsuari as $index => $usuari): ?>

    <img id="foto-usuari" src="<?php echo $usuari["foto_user"]?>"/>
    <form action="index.php?action=modifyData" method="POST" enctype="multipart/form-data" id="Form">
        <div class="input-box">
            <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
            <input type="text" id="nom" name="nom" required pattern="[a-zA-Z\s]+$" title="Sólo letras y espacios" value="<?php echo $usuari['nom'];?>"><label>Nom</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
            <input type="email" id="Correu" name="correu" required value="<?php echo $usuari['email'];?>"><label>Correu Electrònic</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
            <input type="password" id="nom" name="contrasenya"><label>Contrasenya</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
            <input type="text" id="Adreca" name="adreca" maxlength="30" required pattern="[a-zA-Z\s]+$" title="Sólo letras y espacios" value="<?php echo $usuari['adreca'];?>"><label>Adreca</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="business-outline"></ion-icon></ion-icon></span>
            <input type="text" id="Poblacio" name="poblacio" maxlength="30" required pattern="[a-zA-z\s]{1,30}$" title="Sólo letras y espacios" value="<?php echo $usuari['poblacio'];?>"><label>Poblacio</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="eye-outline"></ion-icon></ion-icon></span>
            <input type="text" id="codi_postal" name="codipostal" maxlength="5" required pattern="^\d{5}$" title="El codi postal ha de tenir 5 numeros, sense lletres" value="<?php echo $usuari['codi_postal'];?>"><label>Codigo Postal</label>
        </div>
        <div class="caja-archivo">
            <input type="file" name="profile_image" accept="image/*"/>
        </div>
        <button type="submit" class="btn">Registrar canvis</button>
    </form>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>