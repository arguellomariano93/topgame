<?php
include 'includes/db.php';

$cancha = $_POST['cancha'];
$fecha_hora = $_POST['fecha_hora'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];

$stmt = $conn->prepare("SELECT COUNT(*) FROM reservas WHERE cancha = ? AND fecha_hora = ?");
$stmt->bind_param("ss", $cancha, $fecha_hora);
$stmt->execute();
$stmt->bind_result($ocupado);
$stmt->fetch();
$stmt->close();

if ($ocupado > 0) {
  echo json_encode(['success' => false, 'message' => 'Turno ya reservado']);
  exit;
}

$stmt = $conn->prepare("INSERT INTO reservas (cancha, fecha_hora, nombre, telefono) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $cancha, $fecha_hora, $nombre, $telefono);
$stmt->execute();

echo json_encode(['success' => true]);
?>