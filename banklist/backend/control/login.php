<?php
ob_start();
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

$conexion = new mysqli("127.0.0.1:3307", "root", "", "banktest");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


$emailaddress = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$verify = $conexion->prepare("SELECT firstname, email, password FROM users WHERE email = ?");
$verify->bind_param("s", $emailaddress);
$verify->execute();
$result = $verify->get_result();

if ($result && $result->num_rows === 1) {
    $row = $result->fetch_assoc();

    $firstnameSave = $row['firstname'];
    $emailaddressSave = $row['email'];
    $passwordHash = $row['password'];


    if (password_verify($password, $passwordHash)) {
        $_SESSION['firstname'] = $firstnameSave;
        $_SESSION['email'] = $emailaddressSave;
        $_SESSION['passwordHash'] = $passwordHash;

        header("Location: /router.php?page=bankhome");
        exit;
    } else {
        echo "<h3>Contraseña incorrecta</h3>";
    }
} else {
    echo "<h3>Usuario no encontrado</h3>";
}

$verify->close();
$conexion->close();
?>

