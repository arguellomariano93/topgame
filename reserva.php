<?php
include 'includes/db.php';

$nombre = $_POST['nombre'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$fecha_hora = $_POST['fecha_hora'] ?? '';
$cancha = $_POST['cancha'] ?? 'Cancha 1';

if ($nombre && $telefono && $fecha_hora) {
  // Verificar si ya existe una reserva en ese horario y cancha
  $stmt = $conn->prepare("SELECT COUNT(*) FROM reservas WHERE fecha_hora = ? AND cancha = ?");
  $stmt->bind_param("ss", $fecha_hora, $cancha);
  $stmt->execute();
  $stmt->bind_result($existe);
  $stmt->fetch();
  $stmt->close();

  if ($existe > 0) {
    echo json_encode(["success" => false, "message" => "Ese horario ya está reservado en $cancha"]);
  } else {

    $stmt = $conn->prepare("SELECT COUNT(*) FROM bloqueos WHERE fecha_hora = ? AND cancha = ?");
    $stmt->bind_param("ss", $fecha_hora, $cancha);
    $stmt->execute();
    $stmt->bind_result($bloqueado);
    $stmt->fetch();
    $stmt->close();

    if ($bloqueado > 0) {
    echo json_encode(["success" => false, "message" => "Ese horario está bloqueado por mantenimiento o evento especial"]);
    exit;
    }

    
    // Registrar nueva reserva
    $stmt = $conn->prepare("INSERT INTO reservas (nombre, telefono, fecha_hora, cancha) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $telefono, $fecha_hora, $cancha);
    $stmt->execute();
    echo json_encode(["success" => true, "message" => "Reserva confirmada para el $fecha_hora en $cancha"]);
  }
} else {
  echo json_encode(["success" => false, "message" => "Todos los campos son obligatorios"]);
}
?>