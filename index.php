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

<!-- <header class="bg-dark text-white text-center py-4">
  <h1><i class="fas fa-futbol"></i> ATC | Reserva tu cancha al instante</h1>
  <p>Explorá las canchas disponibles en tu ciudad y en tiempo real</p>
</header> -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="fas fa-futbol"></i> TopGame | Las Cañitas Fútbol 5</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#canchas">Canchas</a></li>
        <li class="nav-item"><a class="nav-link" href="#mapa">Mapa</a></li>
        <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Hero -->
<!-- <section class="hero text-white text-center d-flex align-items-center justify-content-center" style="background-image: url('assets/img/banner2.jpg'); height: 80vh; background-size: cover;">
  <div class="bg-dark bg-opacity-50 p-5 rounded">
    <h1 class="display-4">Reservá tu cancha en segundos</h1>
    <p class="lead">Fútbol, padel y tenis en Formosa y alrededores</p>
    <a href="#canchas" class="btn btn-success btn-lg mt-3"><i class="fas fa-calendar-check"></i> Ver disponibilidad</a>
  </div>
</section> -->

<!-- Carrusel -->
<!-- <div id="bannerCarrusel" class="hero carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/banner2.jpg" class="d-block w-100" alt="Banner 1">
      <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-5 rounded">
        <h1 class="display-4">Reservá tu cancha en segundos</h1>
        <p class="lead">Fútbol, padel y tenis en Formosa y alrededores</p>
        <a href="#canchas" class="btn btn-success btn-lg mt-3"><i class="fas fa-calendar-check"></i> Ver disponibilidad</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/banner3.jpg" class="d-block w-100" alt="Banner 2">
      <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-5 rounded">
        <h1 class="display-4">Reservá tu cancha en segundos</h1>
        <p class="lead">Fútbol, padel y tenis en Formosa y alrededores</p>
        <a href="#canchas" class="btn btn-success btn-lg mt-3"><i class="fas fa-calendar-check"></i> Ver disponibilidad</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/banner4.jpg" class="d-block w-100" alt="Banner 2">
      <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-5 rounded">
        <h1 class="display-4">Reservá tu cancha en segundos</h1>
        <p class="lead">Fútbol, padel y tenis en Formosa y alrededores</p>
        <a href="#canchas" class="btn btn-success btn-lg mt-3"><i class="fas fa-calendar-check"></i> Ver disponibilidad</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarrusel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#bannerCarrusel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div> -->

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
    <a href="#reserva" class="btn btn-success btn-lg mt-3"><i class="fas fa-calendar-check"></i> Ver disponibilidad</a>
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


<!-- <section class="container my-5">
  <form id="reservaForm" class="card p-4 shadow">
    <h3 class="mb-4">Solicitá tu turno</h3>
    <div class="mb-3">
      <label for="ciudad" class="form-label">Ciudad</label>
      <input type="text" id="ciudad" name="ciudad" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="deporte" class="form-label">Deporte</label>
      <select id="deporte" name="deporte" class="form-select" required>
        <option value="">Seleccionar</option>
        <option value="Fútbol 5">Fútbol 5</option>
        <option value="Padel">Padel</option>
        <option value="Tenis">Tenis</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha</label>
      <input type="date" id="fecha" name="fecha" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="hora" class="form-label">Hora</label>
      <input type="time" id="hora" name="hora" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success w-100"><i class="fas fa-search"></i> Buscar cancha</button>
  </form>
</section> -->

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
</body>
</html>