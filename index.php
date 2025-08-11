<?php include 'partials/header.php'; ?>
<link rel="stylesheet" href="/static/style-optimizado.css">

  <nav>
    <div class="nav-container">
      <button class="hamburger" aria-label="Menú" onclick="toggleMenu()">
        &#9776;
      </button>
      <div class="nav-links" id="navLinks">
        <a href="index.php" class="active">Inicio</a>
        <a href="historia.php">Productos</a>
        <a href="novedades.php">Novedades</a>
        <a href="nosotros.php">Nosotros</a>
      </div>
    </div>
  </nav>

    <main>
     

      <section class="section-video" id="historia-resumen">
    <video autoplay muted loop playsinline class="background-video">
      <source src="/static/videos/videoprincipal.mp4" type="video/mp4" />
    </video>
    <div class="historia-contenido">
      <h2 class="bienvenidos">
        BIENVENIDOS A<br><span class="segunda-linea">FINCA LA CARAMELA</span>
      </h2>
    </div>
  </section>

     
      <section class="section-image" id="hero">
        <div class="content-text">
          <h2>Nuestra historia</h2>
          <p class="novspan">Te interesa conocernos? Acá te contamos todo, desde nuestro nacimiento!</p>
          <a href="historia.php" class="boton-historia"
            >Conocé la historia completa</a
          >
        </div>
      </section>

      <section class="section-image" id="combo">
        <div class="content-text">
          <h2>El Combo Ideal</h2>
          <p>
            La selección perfecta de nuestros preferidos
          </p>
          <a href="historia.php#tipos-dulce" class="boton-productos">Ver productos</a>
        </div>
        
      </section>

      <section class="section-image imagen-completa" id="unico">
        <div class="content-text">
          <h2>El arte de lo bueno</h2>
          <p>
           Autenticidad Argentina en cada cucharada.
          </p>
        </div>
      </section>

<section id="novedades-home">

  <!-- Esta parte es visible solo en mobile -->
  <h2 class="titulo-novedades titulo-mobile">
    <span class="novspan">¡Novedades!</span>
  </h2>

  <!-- Esta parte es visible solo en desktop -->
  <h2 class="titulo-novedades titulo-desktop">
    <span class="novspan">¡Novedades!</span>
  </h2>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="static/img/familiar10kg.webp" alt="Nuevo sabor">
        <h3>Lanzamos un nuevo sabor</h3>
        <p>Seguinos en Instagram y entérate de todo. Recetas, info y mucho más!.</p>
      </div>
      <div class="swiper-slide">
        <img src="static/img/finca.webp" alt="Feria de productores">
        <h3>Mira todas las novedades y entérate de todo!</h3>
        <p>Nuevos sabores !!</p>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <div class="boton-vermas-container">
    <a href="./novedades.php" class="boton-vermas">Ver más novedades</a>
  </div>
</section>





    <!-- Mapa -->
    <section id="mapa-section">
      <div class="container">
        <h2>¿Dónde encontrarnos?</h2>
        <p>Ubicaciones de nuestra fábrica y sucursales en Argentina</p>
        <div id="mapa-buttons">
  <button onclick="centrarMapa(0)">📍 Fábrica</button>
  <button onclick="centrarMapa(1)">📍 La Tablada</button>
  <button onclick="centrarMapa(2)">📍 Santa Fe</button>
  <button onclick="centrarMapa(3)">📍 Venta directa CABA</button>
  <button onclick="centrarMapa(4)">📍 Local comercial CABA</button>
  <button onclick="centrarMapa(5)">📍 Retiro por encargo CABA</button>
  <button onclick="centrarMapa(6)">📍 Santa Fe - retiro</button>
  <button onclick="centrarMapa(7)">📍 Mendoza</button>
  <button onclick="centrarMapa(8)">📍 Venta directa y encargos</button>
</div>

        <div id="mapa"></div>
      </div>
    </section>
  </main>

  <?php include 'partials/footer.php'; ?>

  <!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="/static/js/novedades.js"></script>
<script src="/static/js/script.js"></script>

</body>
</html>
