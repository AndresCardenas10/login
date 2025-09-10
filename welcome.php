<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Cursos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container welcome-container">
        <div class="logo-container">
            <img src="img/logo_Elite_Luxury_Motors.png" alt="Logo" class="logo">
        </div>

        <div class="heading">¡Bienvenido <?php echo $_SESSION['usuario']; ?>!</div>
        <p class="welcome-text">
            Estos son algunos cursos de programación que puedes explorar:
        </p>

        <div class="courses-grid">
            <div class="course-card">
                <h3>HTML & CSS</h3>
                <p>Aprende a crear sitios web desde cero con HTML y CSS.</p>
                <a href="#" class="course-btn">Comenzar</a>
            </div>
            <div class="course-card">
                <h3>JavaScript</h3>
                <p>Domina el lenguaje que da vida a las páginas web.</p>
                <a href="#" class="course-btn">Comenzar</a>
            </div>
            <div class="course-card">
                <h3>PHP & MySQL</h3>
                <p>Desarrolla aplicaciones dinámicas conectadas a bases de datos.</p>
                <a href="#" class="course-btn">Comenzar</a>
            </div>
        </div>

        <a href="logout.php" class="logout-button">Cerrar Sesión</a>
    </div>
</body>
</html>

