<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Las Cañitas Fútbol 5 | TopGame</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Reserva tu cancha de fútbol 5 al instante. Canchas disponibles en Formosa, Argentina.">
  <meta name="keywords" content="fútbol 5, reservas, canchas, Formosa, TopGame">
  <meta name="author" content="Valdéz Elías">
  <meta property="og:title" content="Las Cañitas Fútbol 5 | TopGame">
  <meta property="og:description" content="Reservá tu cancha de fútbol 5 al instante. Canchas disponibles en Las Cañitas, Formosa.">
  <meta property="og:image" content="https://topgame.puzzlesystem.online/assets/img/preview.png">
  <meta property="og:url" content="https://topgame.puzzlesystem.online">
  <meta property="og:type" content="website">
  <link rel="icon" href="/topgame/favicon.png" type="image/png">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="fas fa-futbol"></i> TopGame | Las Cañitas Fútbol 5</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#canchas">
            <i class="fas fa-futbol me-1"></i> Canchas
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#mapa">
            <i class="fas fa-map-marked-alt me-1"></i> Mapa
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contacto">
            <i class="fas fa-envelope me-1"></i> Contacto
          </a>
        </li>
      </ul>
      <!-- Contenedor dinámico -->
      <div id="usuarioNavbar">
        <!-- Aquí se insertará el contenido según el estado de sesión -->
      </div>      
    </div>
  </div>
</nav>
<section class="hero-container">
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/banner2.jpg" class="d-block w-100 hero-img" alt="Cancha 1">
      </div>
      <div class="carousel-item">
        <img src="assets/img/banner3.jpg" class="d-block w-100 hero-img" alt="Cancha 2">
      </div>
      <div class="carousel-item">
        <img src="assets/img/banner4.jpg" class="d-block w-100 hero-img" alt="Cancha 3">
      </div>
    </div>
  </div>
  <div class="hero-overlay text-center text-white bg-dark bg-opacity-75 p-4 rounded">
  <h1 class="display-8 fw-bold">Reservá tu cancha en segundos</h1>
  <p class="lead">Canchas de Fútbol 5 sintético en Formosa - Capital</p>

  <form id="formDisponibilidad" class="row justify-content-center mt-4 g-2">
    <!-- Fecha -->
    <div class="col-md-4">
      <input type="date" id="fecha" class="form-control" required>
    </div>

    <!-- Hora -->
    <div class="col-md-4">
      <select id="hora" class="form-select" required>
        <option value="">Seleccionar hora</option>
        <!-- Horas generadas por JS -->
      </select>
    </div>

    <!-- Botón -->
    <div class="col-md-4">
      <button type="submit" class="btn btn-success w-100">
        <i class="fas fa-calendar-check"></i> Ver disponibilidad
      </button>
    </div>
  </form>
</div>
</section>

<!-- Canchas disponibles -->
<section id="canchas" class="container py-5">
  <h2 class="text-center mb-4">Canchas destacadas</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="assets/img/banner2.jpg" class="card-img-top" alt="Fútbol 5 Palo Santo">
        <div class="card-body">
          <h5 class="card-title">Cancha 1 | Las Cañitas Fútbol 5</h5>
          <p class="card-text">Césped sintético, iluminación LED, vestuarios. Turnos disponibles desde las 18:00.</p>
          <button class="btn btn-outline-success w-100" onclick="reservaDemo('Fútbol 5 Palo Santo')">Reservar</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="assets/img/banner3.jpg" class="card-img-top" alt="Fútbol 5 Palo Santo">
        <div class="card-body">
          <h5 class="card-title">Cancha 2 | Las Cañitas Fútbol 5</h5>
          <p class="card-text">Césped sintético, iluminación LED, vestuarios. Turnos disponibles desde las 18:00.</p>
          <button class="btn btn-outline-success w-100" onclick="reservaDemo('Fútbol 5 Palo Santo')">Reservar</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="assets/img/banner4.jpg" class="card-img-top" alt="Fútbol 5 Palo Santo">
        <div class="card-body">
          <h5 class="card-title">Cancha 3 | Las Cañitas Fútbol 5</h5>
          <p class="card-text">Césped sintético, iluminación LED, vestuarios. Turnos disponibles desde las 18:00.</p>
          <button class="btn btn-outline-success w-100" onclick="reservaDemo('Fútbol 5 Palo Santo')">Reservar</button>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="mapa" class="container py-5">
  <h2 class="text-center mb-4">Ubicación Las Cañitas Fútbol 5</h2>
  <div class="row">
    <!-- Mapa -->
    <div class="col-md-6 mb-4">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7160.702395113155!2d-58.18673472228998!3d-26.18525149999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca56bc7b28725%3A0x7a858c7630f1eb43!2zTGFzIENhw7FpdGFzIEbDunRib2wgNS83!5e0!3m2!1ses-419!2sar!4v1755696645721!5m2!1ses-419!2sar" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      
    </div>
    <!-- Fichas desplegables -->
    <div class="col-md-6">
      <div class="accordion" id="accordionCancha">        
        <!-- Ubicación -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingUbicacion">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUbicacion" aria-expanded="true">
              <i class="fas fa-map-marker-alt me-2 text-danger"></i> Ubicación
            </button>
          </h2>
          <div id="collapseUbicacion" class="accordion-collapse collapse show" data-bs-parent="#accordionCancha">
            <div class="accordion-body">
              España 1150, Formosa, Argentina
            </div>
          </div>
        </div>
        <!-- Horarios -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingHorarios">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHorarios">
              <i class="fas fa-clock me-2 text-primary"></i> Horarios
            </button>
          </h2>
          <div id="collapseHorarios" class="accordion-collapse collapse" data-bs-parent="#accordionCancha">
            <div class="accordion-body">
              Todos los días: 15:00 a 02:00 hs (incluye feriados)
            </div>
          </div>
        </div>
        <!-- Servicios -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingServicios">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseServicios">
              <i class="fas fa-concierge-bell me-2 text-success"></i> Servicios
            </button>
          </h2>
          <div id="collapseServicios" class="accordion-collapse collapse" data-bs-parent="#accordionCancha">
            <div class="accordion-body">
              <ul class="list-unstyled mb-0">
                <li><i class="fas fa-wifi me-2 text-muted"></i> Wi-Fi</li>
                <li><i class="fas fa-car me-2 text-muted"></i> Estacionamiento</li>
                <li><i class="fas fa-trophy me-2 text-muted"></i> Torneos</li>
                <li><i class="fas fa-birthday-cake me-2 text-muted"></i> Cumpleaños</li>
                <li><i class="fas fa-fire me-2 text-muted"></i> Parrilla</li>                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Beneficios -->
<section class="bg-light py-5">
  <div class="container text-center">
    <h2 class="mb-4">¿Por qué reservar con TopGame?</h2>
    <div class="row">
      <div class="col-md-4">
        <i class="fas fa-clock fa-2x text-success mb-2"></i>
        <h5>Reservas en tiempo real</h5>
        <p>Olvidate de llamar. Todo desde tu celular.</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-map-marked-alt fa-2x text-success mb-2"></i>
        <h5>Ubicación precisa</h5>
        <p>Encontrá canchas disponibles en Las Cañitas Fútbol 5 con mapa interactivo.</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-users fa-2x text-success mb-2"></i>
        <h5>Gestión de equipos</h5>
        <p>Invitá a tus amigos y armá partidos fácilmente.</p>
      </div>
    </div>
  </div>
</section>
<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
  <p>&copy; 2025 TopGame | Reservas deportivas en Formosa | Desarrollado por Valdéz Elías</p>
  <p><i class="fas fa-envelope"></i> contacto@topgame.com</p>
</footer>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>

<!-- Modal -->
<div class="modal fade" id="modalAuth" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitulo">Autenticación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="formAuth">
          <!-- Nombre (solo en registro) -->
          <div id="grupoNombre" class="mb-3 d-none">
            <label for="nombre" class="form-label">Nombre completo</label>
            <input type="text" class="form-control" id="nombre">
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" required>
          </div>

          <!-- Contraseña -->
          <div class="mb-3 position-relative">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" required>
            <button type="button" class="btn btn-sm position-absolute top-50 end-0 me-2" id="togglePassword">
              <i class="fa fa-eye"></i>
            </button>
          </div>

          <!-- Repetir contraseña (solo en registro) -->
          <div id="grupoRepetir" class="mb-3 d-none position-relative">
            <label for="repetir" class="form-label">Repetir contraseña</label>
            <input type="password" class="form-control" id="repetir">
            <button type="button" class="btn btn-sm position-absolute top-50 end-0 me-2" id="toggleRepetir">
              <i class="fa fa-eye"></i>
            </button>
          </div>

          <!-- Botón de acción -->
          <button type="submit" class="btn w-100" id="btnAccion">Continuar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script>
  function actualizarNavbar() {
    const contenedor = document.getElementById("usuarioNavbar");
    const usuario = JSON.parse(localStorage.getItem("usuarioActivo"));

    if (usuario) {
      contenedor.innerHTML = `
        <div class="dropdown">
          <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
            <i class="fas fa-user-circle"></i> ${usuario.nombre}
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><span class="dropdown-item-text text-muted">${usuario.email}</span></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="#" onclick="cerrarSesion()">Cerrar sesión</a></li>
          </ul>
        </div>
      `;
    } else {
      contenedor.innerHTML = `        
        <button class="btn btn-outline-success" onclick="mostrarFormulario('registro')">
          <i class="fas fa-user-plus"></i> Registrarse
        </button>
        <button class="btn btn-outline-light me-2" onclick="mostrarFormulario('login')">
          <i class="fas fa-user"></i> Iniciar sesión
        </button>
      `;
    }
  }

  function cerrarSesion() {
    Swal.fire({
      title: "¿Cerrar sesión?",
      icon: "question",
      showCancelButton: true,
      confirmButtonText: "Sí, salir",
      cancelButtonText: "Cancelar"
    }).then((result) => {
      if (result.isConfirmed) {
        localStorage.removeItem("usuarioActivo");
        actualizarNavbar();
        Swal.fire({
          title: "Sesión cerrada",
          text: `Hasta pronto`,
          icon: "info",
          timer: 3000,
          showConfirmButton: false
        });  
      }
    });
  }

  // Ejecutar al cargar
  actualizarNavbar();
</script>
<script>

  function togglePasswordVisibility(inputId, toggleId) {
    const input = document.getElementById(inputId);
    const toggle = document.getElementById(toggleId);
    const icon = toggle.querySelector("i");

    toggle.addEventListener("click", () => {
      const isVisible = input.type === "text";
      input.type = isVisible ? "password" : "text";
      icon.classList.toggle("fa-eye");
      icon.classList.toggle("fa-eye-slash");
    });
  }

  togglePasswordVisibility("password", "togglePassword");
  togglePasswordVisibility("repetir", "toggleRepetir");

  let modoActual = "login";

  function mostrarFormulario(modo) {
    modoActual = modo;

    const modal = new bootstrap.Modal(document.getElementById("modalAuth"));
    document.getElementById("modalTitulo").textContent = modo === "login" ? "Iniciar sesión" : "Registrarse";
    document.getElementById("btnAccion").textContent = modo === "login" ? "Iniciar sesión" : "Registrarse";
    document.getElementById("btnAccion").className = modo === "login" ? "btn btn-primary w-100" : "btn btn-success w-100";

    document.getElementById("grupoNombre").classList.toggle("d-none", modo === "login");
    document.getElementById("grupoRepetir").classList.toggle("d-none", modo === "login");

    document.getElementById("formAuth").reset();
    modal.show();
  }

  document.getElementById("formAuth").addEventListener("submit", function(e) {
    e.preventDefault();

    const nombre = document.getElementById("nombre").value.trim();
    const email = document.getElementById("email").value.trim().toLowerCase();
    const password = document.getElementById("password").value;
    const repetir = document.getElementById("repetir").value;

    let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];

    if (modoActual === "registro") {
      if (!nombre || !email || !password || !repetir) {
        Swal.fire("Campos incompletos", "Completá todos los datos", "warning");
        return;
      }

      if (password.length < 6) {
        Swal.fire("Contraseña débil", "Usá al menos 6 caracteres", "info");
        return;
      }

      if (password !== repetir) {
        Swal.fire("Contraseñas distintas", "Verificá que coincidan", "error");
        return;
      }

      if (usuarios.some(u => u.email === email)) {
        Swal.fire("Correo ya registrado", "Probá iniciar sesión", "error");
        return;
      }

      usuarios.push({ nombre, email, password });
      localStorage.setItem("usuarios", JSON.stringify(usuarios));
      actualizarNavbar();

      Swal.fire({
        title: "Registro exitoso",
        text: `Bienvenido, ${nombre}`,
        icon: "success",
        timer: 3000,
        showConfirmButton: false
      });

      bootstrap.Modal.getInstance(document.getElementById("modalAuth")).hide();

    } else {
      const usuario = usuarios.find(u => u.email === email && u.password === password);

      if (usuario) {
        Swal.fire({
          title: "Sesión iniciada",
          text: `Hola de nuevo, ${usuario.nombre}`,
          icon: "success",
          timer: 3000,
          showConfirmButton: false
        });        
        localStorage.setItem("usuarioActivo", JSON.stringify(usuario));
        actualizarNavbar();
        bootstrap.Modal.getInstance(document.getElementById("modalAuth")).hide();
      } else {
        Swal.fire("Datos incorrectos", "Verificá tu correo y contraseña", "error");
      }
    }
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const horaSelect = document.getElementById("hora");
    
    // Horas del día actual: 15:00 a 23:00
    for (let h = 15; h <= 23; h++) {
      const horaTexto = h.toString().padStart(2, '0') + ":00";
      const option = document.createElement("option");
      option.value = horaTexto;
      option.textContent = horaTexto + " hs";
      horaSelect.appendChild(option);
    }

    // Horas del día siguiente: 00:00 a 03:00
    for (let h = 0; h <= 2; h++) {
      const horaTexto = h.toString().padStart(2, '0') + ":00";
      const option = document.createElement("option");
      option.value = horaTexto;
      option.textContent = horaTexto + " hs (día siguiente)";
      horaSelect.appendChild(option);
    }


    // Fecha mínima: hoy
    const fechaInput = document.getElementById("fecha");
    const hoy = new Date().toISOString().split("T")[0];
    fechaInput.setAttribute("min", hoy);
  });

  // Enviar datos a otra página
  document.getElementById("formDisponibilidad").addEventListener("submit", function(e) {
    e.preventDefault();
    const fecha = document.getElementById("fecha").value;
    const hora = document.getElementById("hora").value;

    if (!fecha || !hora) {
      Swal.fire("Faltan datos", "Seleccioná fecha y hora", "warning");
      return;
    }

    // Redirigir con parámetros GET
    window.location.href = `disponibilidad.php?fecha=${fecha}&hora=${hora}`;
  });
</script>

</div>
</body>
</html>