<?php
include 'includes/db.php';

// eventos.php
$eventos = [];
// Suponiendo que tenés una tabla 'reservas'
$query = "SELECT fecha_hora FROM reservas";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
  $eventos[] = [
    'start' => $row['fecha_hora'],
    'title' => 'Reservado',
    'editable' => false,
    'display' => 'background',
    'color' => '#ccc'
  ];
}

echo json_encode($eventos);
?>