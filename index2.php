<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Reservas | Club Deportivo Palo Santo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { font-family: 'Segoe UI'; background: #f8f9fa; }
    header { background: #2c3e50; color: white; padding: 20px; text-align: center; }
    #calendar { max-width: 1000px; margin: 40px auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    .form-section { max-width: 600px; margin: 30px auto; }
  </style>
</head>
<body>

<header>
  <h1>Club Deportivo Palo Santo</h1>
  <p>Reservá tu turno en la cancha sintética</p>
</header>

<section class="form-section">
  <form id="busquedaForm" class="card card-body">
  <label>Fecha:</label>
  <input type="date" name="fecha" class="form-control" required>

  <label class="mt-3">Horario deseado:</label>
  <input type="time" name="hora" class="form-control" required>

  <button type="submit" class="btn btn-primary mt-4">Buscar disponibilidad</button>
</form>
</section>

<div id="calendar" style="display:none;"></div>

<!-- Modal de reserva -->
<div class="modal fade" id="reservaModal" tabindex="-1">
  <div class="modal-dialog">
    <form id="reservaForm" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmar reserva</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="cancha">
        <input type="hidden" name="fecha_hora">
        <label>Nombre:</label>
        <input type="text" name="nombre" class="form-control" required>
        <label class="mt-2">Teléfono:</label>
        <input type="text" name="telefono" class="form-control" required>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Reservar</button>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
<script>
let calendar;
const modal = new bootstrap.Modal(document.getElementById('reservaModal'));

document.getElementById('busquedaForm').addEventListener('submit', function (e) {
  e.preventDefault();
  const fecha = this.fecha.value;
  const hora = this.hora.value;
  const fechaHora = fecha + 'T' + hora;

  fetch('verificar.php?fecha_hora=' + fechaHora)
    .then(res => res.json())
    .then(data => {
      if (data.disponible) {
        document.getElementById('calendar').style.display = 'block';

        if (!calendar) {
          calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
            initialView: 'timeGridDay',
            slotMinTime: '15:00:00',
            slotMaxTime: '24:00:00',
            locale: 'es',
            selectable: true,
            selectOverlap: false,
            events: 'eventos.php',
            eventDidMount: function (info) {
              info.el.innerHTML = '<div class="fc-event-title">Reservado</div>';
            },
            eventClick: function () {
              alert('Este turno ya está reservado');
            },
            select: function (info) {
              document.querySelector('#reservaForm [name=fecha_hora]').value = info.startStr;
              modal.show();
            }
          });
          calendar.render();
        }
      } else {
        alert('Turno ocupado. Probá otro horario.');
      }
    });
});

// Guardar reserva
document.getElementById('reservaForm').addEventListener('submit', function (e) {
  e.preventDefault();
  const formData = new FormData(this);

  fetch('guardar_reserva.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    if (data.success) {
      modal.hide();
      calendar.refetchEvents();
      alert(`Gracias ${formData.get('nombre')} por reservar. Tu turno fue registrado para ${formData.get('fecha_hora')}`);
    } else {
      alert('Error al guardar: ' + data.message);
    }
  });
});
</script>

</body>
</html>