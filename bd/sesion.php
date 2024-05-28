<?php
session_start();

// Verificar si el usuario no ha iniciado sesión y no está en la página de inicio de sesión
if (!isset($_SESSION['usuario']) && !strpos($_SERVER['REQUEST_URI'], 'index.php')) {
    header('Location: ../index.php');
    exit();
}
?>
