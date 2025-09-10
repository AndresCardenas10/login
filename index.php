<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: welcome.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="img/logo_Elite_Luxury_Motors.png" alt="Logo" class="logo">
        </div>

        <div class="heading">Sign In</div>

        <form action="validar.php" method="POST" class="form">
            <input required class="input" type="email" name="email" placeholder="E-mail">
            <input required class="input" type="password" name="password" placeholder="Password">
            
            <span class="forgot-password"><a href="#">¿Olvidaste tu contraseña?</a></span>
            <input class="login-button" type="submit" value="Iniciar Sesión">
        </form>

        <div class="social-account-container">
            <span class="title">¿No tienes cuenta?</span>
            <div class="social-accounts">
                <a href="register.php" class="social-button">Crear cuenta</a>
            </div>
        </div>
    </div>
</body>
</html>
