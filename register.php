<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="img/logo_Elite_Luxury_Motors.png" alt="Logo" class="logo">
        </div>
        <div class="heading">Crear Cuenta</div>
        <form action="guardar.php" method="POST" class="form">
            <input required class="input" type="text" name="nombres" placeholder="Nombres">
            <input required class="input" type="text" name="apellidos" placeholder="Apellidos">
            <input required class="input" type="email" name="correo" placeholder="Correo">
            <input required class="input" type="password" name="password" placeholder="Contraseña">
            <input class="login-button" type="submit" value="Registrar">
        </form>
        <div class="social-account-container">
            <span class="title">¿Ya tienes cuenta?</span>
            <div class="social-accounts">
                <a href="index.php" class="social-button">Iniciar Sesión</a>
            </div>
        </div>
    </div>
</body>
</html>