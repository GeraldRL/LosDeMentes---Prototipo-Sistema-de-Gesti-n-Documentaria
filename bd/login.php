<?php
session_start();
include 'conexion.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE nick = ? AND contrasena = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['user'] = $email;
        echo json_encode(['success' => true, 'message' => 'Inicio de sesión exitoso. Bienvenido, '.$email.'!', 'redirect' => '../LosDeMentes---Prototipo-Sistema-de-Gesti-n-Documentaria/Views/Main.php']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Email o contraseña incorrectos.']);
    }

    $stmt->close();
}

$conn->close();
?>
