<?php
require "conexion.php";

$nombres   = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);
$correo    = trim($_POST['correo']);

// Usar MD5 para generar un hash corto
$password  = md5($_POST['password']);

$sql = "INSERT INTO users (Nombres, Apellidos, Email, Contraseña) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nombres, $apellidos, $correo, $password);

if ($stmt->execute()) {
    echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Error al registrar usuario: " . $conn->error . "'); window.location='register.php';</script>";
}
?>
