<?php
session_start();
include 'conexion.php';

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$nick = $_POST['nick'];
$tipo = $_POST['tipo'];
$area = $_POST['area'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO usuarios (nombre, apellidos, nick, tipo, area, correo, contrasena) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param($nombre, $apellidos, $nick, $tipo, $area, $correo, $contrasena);

// Ejecutar la consulta
if ($stmt->execute()) {
    // Redirigir al usuario a alguna página de éxito
    header('Location: Main.php');
    exit();
} else {
    // En caso de error, mostrar mensaje de error
    echo "Error al registrar el usuario: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
