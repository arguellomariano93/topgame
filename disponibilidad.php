<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Disponibilidad de Canchas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

  <div class="container py-5">
    <h2 class="text-center mb-4">Disponibilidad de Canchas</h2>
    <div class="row" id="cardsContainer"></div>
  </div>

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
    const urlParams = new URLSearchParams(window.location.search);
    const fecha = urlParams.get("fecha");
    const hora = urlParams.get("hora");

    fetch("canchas.json")
      .then(res => res.json())
      .then(data => {
        const container = document.getElementById("cardsContainer");

        data.canchas.forEach(cancha => {
          const disponibles = cancha.disponibilidad[fecha] || [];
          const reservados = cancha.reservados[fecha] || [];

          const horaInt = parseInt(hora.split(":")[0]);
          const sugeridas = disponibles.filter(h => {
            const hInt = parseInt(h.split(":")[0]);
            return Math.abs(hInt - horaInt) <= 1 && !reservados.includes(h);
          });

          if (sugeridas.length > 0) {
            const card = document.createElement("div");
            card.className = "col-md-4 mb-4";
            card.innerHTML = `
              <div class="card shadow-sm">
                <img src="${cancha.imagen}" class="card-img-top" alt="${cancha.nombre}">
                <div class="card-body">
                  <h5 class="card-title">${cancha.nombre}</h5>
                  <p class="card-text">
                    ${cancha.descripcion}<br>
                    <strong>Ubicación:</strong> ${cancha.ubicacion}<br>
                    <strong>Precio:</strong> $${cancha.precio}
                  </p>
                  <p><strong>Horarios disponibles:</strong></p>
                  ${sugeridas.map(h => `
                    <button class="btn btn-outline-success btn-sm m-1" onclick="reservar('${cancha.nombre}', '${fecha}', '${h}')">${h}</button>
                  `).join("")}
                </div>
              </div>
            `;
            container.appendChild(card);
          }
        });

        if (container.innerHTML === "") {
          container.innerHTML = `
            <div class="col-12 text-center">
              <div class="alert alert-warning">
                <i class="fas fa-calendar-times"></i> No hay canchas disponibles cerca de las ${hora} hs el ${fecha}.
              </div>
            </div>
          `;
        }
      });

    function reservar(nombre, fecha, hora) {
      Swal.fire({
        title: "Confirmar reserva",
        html: `<strong>${nombre}</strong><br>Fecha: ${fecha}<br>Hora: ${hora}`,
        icon: "question",
        showCancelButton: true,
        confirmButtonText: "Reservar",
        cancelButtonText: "Cancelar"
      }).then(result => {
        if (result.isConfirmed) {
          Swal.fire("¡Reservado!", "Tu turno ha sido registrado.", "success");
          // Aquí podrías enviar datos al backend real
        }
      });
    }
  </script>

</body>
</html>