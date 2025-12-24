<?php
ob_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Conexión a la base de datos
$conexion = new mysqli('127.0.0.1:3307', 'root', '', 'login');
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos del formulario
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Validar campos vacíos
if (empty($email) || empty($password)) {
    echo "<h3>Campos vacíos</h3>";
    exit();
}

// Buscar el usuario por correo
$verificar = $conexion->prepare("SELECT password FROM user WHERE email = ?");
if ($verificar) {
    $verificar->bind_param("s", $email);
    $verificar->execute();
    $verificar->store_result();

    if ($verificar->num_rows === 1) {
        $verificar->bind_result($storedPassword);
        $verificar->fetch();

        // Comparar directamente (sin encriptación)
        if ($password === $storedPassword) {
            header("Location: /router.php?page=sect1");
            exit();
        } else {
            echo "<h3>Contraseña incorrecta</h3>";
        }
    } else {
        echo "<h3>Correo no registrado</h3>";
    }

    $verificar->close();
} else {
    echo "<h3>Error en la consulta</h3>";
}

$conexion->close();
?>

