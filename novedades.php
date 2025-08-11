<?php include 'partials/header.php'; ?>
<!-- CSS principal -->
<link rel="stylesheet" href="/static/style-optimizado.css">



  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Coiny&family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Iconos -->
   <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
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
        <a href="historia.php">Productos</a>
        <a href="novedades.php" class="active">Novedades</a>
        <a href="nosotros.php">Nosotros</a>
      </div>
    </div>
  </nav>
<main>
      <section id="novedades">
  <h2 class="titulo-novedades">¡Novedades!</h2>
  <div class="novedades-grid">
    
 <!-- Novedad 1 -->
<article class="card-novedad">
  <img src="static/img/tortaoreo.webp" alt="Receta especial de torta Oreo">
  <div class="contenido-novedad">
    <h3>Receta exclusiva: Torta Oreo irresistible</h3>
    <p class="fecha">28 de mayo de 2025</p>
    <p>Descubrí cómo preparar nuestra torta Oreo especial, con una mezcla cremosa y crujientes galletitas. ¡Ideal para sorprender a todos!</p>

    
    <a class="btn-novedad" href="https://www.instagram.com/p/DJ19V6sToo_/?img_index=1" target="_blank" rel="noopener">
      Ver receta en Instagram
    </a>
  </div>
</article>

<!-- Novedad 2 -->
<article class="card-novedad">
  <img src="static/img/logo-dorado-textura.webp" alt="Visitas guiadas de invierno">
  <div class="contenido-novedad">
    <h3>Visitanos en Instagram</h3>
    <p class="fecha">15 de mayo de 2025</p>
    <p>Contenido diario donde te vas a enterar de todo.</p>

    <a class="btn-novedad" href="https://www.instagram.com/fincalacaramela.srl?igsh=MWJuMjR1bG90ZmpkcA==/ABCDEFGHIJK/" target="_blank" rel="noopener">
      Info en Instagram
    </a>
  </div>
</article>

<!--Novedad 3 -->
<article class="card-novedad">
  <img src="static/img/Dutella.webp" alt="Nuevos sabores de dulce de leche">
  <div class="contenido-novedad">
    <h3>¡Llegaron nuevos sabores a Finca La Caramela!</h3>
    <p class="fecha">29 de junio de 2025</p>
    <p>Seguimos creciendo y sumando opciones para que disfrutes el dulce de leche como más te guste.
Hoy te presentamos nuestras nuevas variedades, pensadas para sorprender, inspirar y acompañarte en tus recetas y momentos más dulces.
  Avellanas, chocolate, cookies, banana, Rhum, café 
. <br>¡Y más novedades en camino!</p>

    
  </div>
</article>


  </div>
</section>

<script src="/static/js/novedades.js"></script>
<script src="/static/js/script.js"></script>

    </main>

<?php include 'partials/footer.php'; ?>
