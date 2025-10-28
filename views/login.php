<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login - Reserva de Canchas</title>

  <!-- Bootstrap para estilos -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

  <!-- Font Awesome para íconos (opcional en esta vista) -->
  <link rel="stylesheet" href="../assets/css/all.min.css">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <!-- Título del formulario -->
        <h4 class="text-center mb-4">Acceso al Panel</h4>

        <!-- Formulario de login -->
        <form id="loginForm">
          <!-- Campo de email -->
          <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>

          <!-- Campo de contraseña -->
          <input type="password" name="password" class="form-control mb-2" placeholder="Contraseña" required>

          <!-- Botón de envío -->
          <button type="submit" class="btn btn-primary w-100">Ingresar</button>
        </form>
      </div>
    </div>
  </div>

  <!-- SweetAlert para alertas visuales -->
  <script src="../assets/js/sweetalert.all.min.js"></script>

  <!-- jQuery para AJAX -->
  <script src="../assets/js/jquery.min.js"></script>

  <script>
    // Evento al enviar el formulario
    $('#loginForm').submit(function(e){
      e.preventDefault(); // Evita el envío tradicional

      // Envío por AJAX al backend
      $.post('../ajax/login.php', $(this).serialize(), function(response){
        // Si el login es exitoso, redirige al dashboard
        if(response.success){
          window.location.href = 'dashboard.php';
        } else {
          // Si falla, muestra alerta con el mensaje
          swal("Error", response.message, "error");
        }
      }, 'json');
    });
  </script>
</body>
</html>
