<?php
// Incluir el archivo de conexión
require 'conexion.php';

// Inicializar la respuesta
$response = array('success' => false);

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y validar los datos del formulario
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $apellidos = $conn->real_escape_string($_POST['apellidos']);
    $nick = $conn->real_escape_string($_POST['nick']);
    $tipo = $conn->real_escape_string($_POST['tipo']);
    $area = $conn->real_escape_string($_POST['area']);
    $correo = $conn->real_escape_string($_POST['correo']);
    $contrasena = $conn->real_escape_string($_POST['contrasena']);

    // Encriptar la contraseña
    $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

    // Insertar los datos en la tabla usuarios
    $sql = "INSERT INTO usuarios (nombre, apellidos, nick, tipo, area, correo, contrasena) 
            VALUES ('$nombre', '$apellidos', '$nick', '$tipo', '$area', '$correo', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        $response['success'] = true;
    } else {
        $response['error'] = $conn->error;
    }
}

// Cerrar la conexión
$conn->close();

// Devolver la respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
