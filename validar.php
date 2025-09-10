<?php
session_start();
require "conexion.php";

$emailIngresado = trim($_POST['email']);
$passIngresado  = md5($_POST['password']); // Generar hash corto para comparación

$sql = "SELECT * FROM users WHERE Email=? AND Contraseña=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $emailIngresado, $passIngresado);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
    // Guardamos nombre y apellido para mostrar en la bienvenida
    $_SESSION['usuario'] = $usuario['Nombres'] . " " . $usuario['Apellidos'];
    header("Location: welcome.php");
} else {
    echo "<script>alert('Correo o contraseña incorrectos'); window.location='index.php';</script>";
}
?>
