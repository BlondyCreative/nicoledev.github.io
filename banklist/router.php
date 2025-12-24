<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$page = $_GET['page'] ?? 'login';
$permitidas = ['bankhome', 'bankScreen', 'bankLogin' ];

if (!in_array($page, $permitidas)) {
    http_response_code(404);
    echo "<p>Página no encontrada</p>";
    exit;
}

$viewPath = __DIR__ . "/frontend/views/{$page}.php";


if (!file_exists($viewPath)) {
    http_response_code(500);
    echo "<p>Error: vista '{$page}' no encontrada</p>";
    exit;
}

include $viewPath;
?>