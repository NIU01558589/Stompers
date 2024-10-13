<html>
<head>
</head>
<body onload="hideMessage()">
        <?php if (isset($_SESSION['user_id'])): ?>
            <div id="mensaje">
                <h1>Login Result</h1>
                <p>¡El usuario está logueado!</p>
            </div>
        <?php else: ?>
            <div id="mensaje">
                <h1>Login Result</h1>
                <p>El usuario no está logueado.</p>
            </div>
        <?php endif; ?>
</body>
</html>
