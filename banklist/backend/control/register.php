<?php
ob_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

$conexion = new mysqli("127.0.0.1:3307", "root", "", "banktest");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$firstname = $_POST["firstname"] ?? '';
$lastname = $_POST["lastname"] ?? '';
$emailaddress = $_POST["email"] ?? '';
$password = $_POST["password"] ?? '';


if (empty($firstname) || empty($lastname) || empty($emailaddress) || empty($password)) {
    echo "<h3>Todos los campos son obligatorios</h3>";
    exit();
}

if (!filter_var($emailaddress, FILTER_VALIDATE_EMAIL)) {
    echo "<h3>Email inválido</h3>";
    exit();
}


$verify = $conexion->prepare("SELECT id FROM users WHERE email = ?");
$verify->bind_param("s", $emailaddress);
$verify->execute();
$verify->store_result();

if ($verify->num_rows > 0) {
    echo "<h3>Este correo ya está registrado</h3>";
    exit();
} else {
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conexion->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstname, $lastname, $emailaddress, $passwordHash);


    if ($stmt->execute()) {
        header("Location: /router.php?page=bankLogin");
        exit();
    } else {
        echo "<h3>Error al registrar: " . $stmt->error . "</h3>";
    }
}

$stmt->close();
$verify->close();
$conexion->close();
?>
