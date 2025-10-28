<?php
// Parámetros de conexión
$host = 'localhost';
$dbname = 'reserva_canchas';
$user = 'root';
$pass = '';

// Intento de conexión con PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Modo de error: excepciones
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    // En caso de error, se muestra el mensaje y se detiene la ejecución
    die("Error de conexión: " . $e->getMessage());
}
?>
