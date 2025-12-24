<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $inputEmail = $_POST['email'] ?? '';
  $inputPassword = $_POST['password'] ?? '';

$storedEmail = $_SESSION['email'] ?? null;
$storedHash = $_SESSION['passwordHash'] ?? null;

if ($storedEmail && $storedHash) {
    $emailMatch = $inputEmail === $storedEmail;
    $passwordMatch = password_verify($inputPassword, $storedHash);

    if ($emailMatch && $passwordMatch) {
    session_destroy();
    header("Location: /router.php?page=bankScreen");
    exit; }
} else {
    echo "Usuario o PIN incorrecto. No se cerró la cuenta.";
}
}
?>
