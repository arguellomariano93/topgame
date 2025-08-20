flatpickr("#fechaHora", {
  enableTime: true,
  dateFormat: "Y-m-d H:i",
  minDate: "today",
  time_24hr: true
});

document.getElementById('reservaForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const formData = new FormData(this);

  fetch('reserva.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    Swal.fire({
      icon: data.success ? 'success' : 'error',
      title: data.message,
      confirmButtonText: 'OK'
    });
    if (data.success) this.reset();
  })
  .catch(() => {
    Swal.fire({
      icon: 'error',
      title: 'Error de conexión',
      text: 'Intentalo nuevamente más tarde'
    });
  });
});