<?php
ob_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

$conexion = new mysqli('127.0.0.1:3307', 'root', '', 'login');
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($name) || empty($email) || empty($password)) {
    echo "<h3>Campos vacíos</h3>";
    exit();
}

$verificar = $conexion->prepare("SELECT id FROM user WHERE email = ?");
$verificar->bind_param("s", $email);
$verificar->execute();
$verificar->store_result();

if ($verificar->num_rows > 0) { echo "<h3>Este correo ya está registrado</h3>"; exit(); 
} else {
    $stmt = $conexion->prepare("INSERT INTO user (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {

         header("Location: /router.php?page=login");
        exit();
    } else {
        echo "<h3>Error al registrar: " . $stmt->error . "</h3>";
    }
    $stmt->close();
}
?>
