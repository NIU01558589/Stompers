<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <script src="funcions.js"></script>
    <title>Registre</title>
</head>
<body>
<div class="container">
    <div class="imatge" style=" grid-column:2/3;">

    </div>
    <a href="../index.php">
        <img src="../img/stompers-white.png" class="fotoStompers"/>
    </a>
    <div class="Form" style=" grid-column: 1/2;">
        <div class="form-box">
            <h2>Registra't</h2>
            <form action="../controller/registre.php" method="POST" id="Form">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    <input type="text" id="nom" name="nom" required pattern="[a-zA-Z\s]+$" title="Sólo letras y espacios"><label>Nom</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" id="Correu" name="correu" required><label>Correu Electrònic</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" id="nom" name="contrasenya" required><label>Contrasenya</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                    <input type="text" id="Adreca" name="adreca" maxlength="30" required pattern="[a-zA-Z\s]+$" title="Sólo letras y espacios"><label>Adreca</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="business-outline"></ion-icon></ion-icon></span>
                    <input type="text" id="Poblacio" name="poblacio" maxlength="30" required pattern="[a-zA-z\s]{1,30}$" title="Sólo letras y espacios"><label>Poblacio</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="eye-outline"></ion-icon></ion-icon></span>
                    <input type="text" id="codi_postal" name="codipostal" maxlength="5" required pattern="^\d{5}$" title="El codi postal ha de tenir 5 numeros, sense lletres"><label>Codigo Postal</label>
                </div>
            </form>
        </div>
        <button type="submit" class="btn">Registrar</button>
    </div>
</div>

</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<footer>
    <P>&copy Stompers</P>
</footer>
</body>
</html>