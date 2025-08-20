<?php
include 'includes/db.php';

$cancha = $_GET['cancha'];
$fecha_hora = $_GET['fecha_hora'];

$stmt = $conn->prepare("SELECT COUNT(*) FROM reservas WHERE cancha = ? AND fecha_hora = ?");
$stmt->bind_param("ss", $cancha, $fecha_hora);
$stmt->execute();
$stmt->bind_result($ocupado);
$stmt->fetch();
$stmt->close();

echo json_encode(['disponible' => $ocupado == 0]);
?>