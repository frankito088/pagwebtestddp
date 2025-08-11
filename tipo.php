<?php include 'partials/header.php'; ?>
<!-- CSS principal -->

<link rel="stylesheet" href="/static/style-optimizado.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Coiny&family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Iconos -->
   <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
  rel="stylesheet"
/>

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<nav>
    <div class="nav-container">
      <button class="hamburger" aria-label="Menú" onclick="toggleMenu()">
        &#9776;
      </button>
      <div class="nav-links" id="navLinks">
        <a href="index.php" >Inicio</a>
        <a href="historia.php" class="active">Productos</a>
        <a href="novedades.php">Novedades</a>
        <a href="nosotros.php">Nosotros</a>
        <a href="historia.php#tipos-dulce" class="volver btn-primary">
  <i class="fas fa-arrow-left"></i> Volver
</a>
      </div>
    </div>
  </nav>

    <h1 id="titulo-tipo">Variedades</h1>
    <p id="intro-tipo"></p>

   
    <div id="lista-dulces" class="grid"></div>
  </main>

 <script src="/static/js/catalogo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="/static/js/novedades.js"></script>
<script src="/static/js/script.js"></script>

</body>
</html>

<?php include 'partials/footer.php'; ?>
