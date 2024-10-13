
<!DOCTYPE html>
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<title>Inici de sessió: Stompers</title> 
		<link rel="stylesheet" href="../css/log_in.css"/>
		<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
	</head>
    <body>
        <div id="contenidor">
            <div id="gradient" style="grid-column: 1/2">
                <a href="../index.php">
                    <img src="../img/stompers-logo.png"/>
                </a>
            </div>
            <div id="color_fondo" style="grid-column: 2/3;">
                <form class="style_form" action="../index.php?action=log_in" method="POST">
                    <h2>Inicia sessió amb el teu compte Stompers &reg</h2><br/>
                    <input class="box" type="email" name="email" placeholder="Correu Electrònic"/><br/>
					<input class="box" type="password" name="password" placeholder="Contrasenya"/><br/><br/>
                    <button class="button-submit-log-in" type="submit">Iniciar sessió</button>
                    <br/>
                </form>
                <a id="enllac" href="register.php">No tens Contrasenya? Registra't</a>
            </div>
        </div>
    </body>
</html>