<?php
require '../includes/db.php'; // Conexión a la base de datos

// Captura de datos enviados por POST
$email = $_POST['email'];
$password = $_POST['password'];

// Consulta del usuario por email
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

// Verificación de contraseña
if($user && password_verify($password, $user['password'])){
    // Inicio de sesión
    session_start();
    $_SESSION['usuario_id'] = $user['id'];

    // Respuesta JSON de éxito
    echo json_encode(['success' => true]);
} else {
    // Respuesta JSON de error
    echo json_encode(['success' => false, 'message' => 'Credenciales inválidas']);
}
