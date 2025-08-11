<?php include 'partials/header.php'; ?>
<link rel="stylesheet" href="/static/style-optimizado.css">
<body>
  


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
      </div>
    </div>
  </nav>

  <section id="historia" class="section-historia" aria-labelledby="historia-title">
    <div class="overlay"></div>
    <div class="content-text">
      <h2 id="historia-title">Historia</h2>
      
      <p>
        La historia de nuestro dulce de leche yace mucho antes de la fundación de Finca La Caramela. Nuestra impronta
        cuenta con vasta trayectoria en la industria del dulce de leche, como en la producción, y una tradición familiar
        que se remonta en el año 1939, cuando nuestra clásica receta dio sus primeros pasos. Desde entonces, nuestros
        fundadores han recorrido un largo camino, atravesando diferentes emprendimientos y empresas, pero siempre con la
        convicción y la pasión por el dulce de leche, que desde entonces, nos representa.
      </p>
      <p>
        Luego de largos años de trabajo y dedicación, en 2016 nace Finca La Caramela S.R.L., que refleja la amplia
        visión y profunda conexión que poseemos con aquel original producto. Gracias a la experiencia en la industria y
        a la capacidad de adaptación, logramos consolidar una marca que hoy se distingue por la excelencia de nuestros
        dulces.
      </p>
      <p>
        La planta productiva se ubica en Ranchos, Gral Paz, provincia de Buenos Aires, Argentina. Un pueblito a 100 km
        de la capital federal, que cuenta con ubicación estratégica para desarrollar nuestra área comercial en la gran
        ciudad.
      </p>
      <p>
        Actualmente Finca La Caramela continúa siendo una empresa familiar, que crece año a año, con la misma impronta
        que en sus inicios, pero con un desarrollo industrial y estructural, que nos permite llegar con nuestro dulce de
        leche a todo el país.
      </p>
    </div>
  </section>

  <section id="tipos-dulce" class="section-tipos">
  <h2 class="titulo-tipos">Productos</h2>
  <p class="subtitulo-tipos">Descubrí nuestras variedades de dulce de leche, hay uno especial para cada ocasión.</p>

  <div class="tipos-gigantes">
  <a href="tipo.php?tipo=familiar" class="ddl-item">
    <img src="/static/img/familiar400g.webp" alt="Familiar">
    <span>Familiar</span>
  </a>
  <a href="tipo.php?tipo=repostero" class="ddl-item">
   <img src="/static/img/repostero400gr.webp" alt="Repostero">
    <span>Repostero</span>
  </a>
  <a href="tipo.php?tipo=alfajorero" class="ddl-item">
   <img src="/static/img/repostero10kg.webp" alt="Alfajorero">
    <span>Alfajorero</span>
  </a>
  <a href="tipo.php?tipo=clasico" class="ddl-item">
    <img src="/static/img/clasico450gr.webp" alt="Clásico">
    <span>Clásico</span>
  </a>
  <a href="tipo.php?tipo=anama" class="ddl-item">
    <img src="/static/img/anamarepos400gr.webp" alt="Anamá">
    <span>Anamá</span>
  </a>
  <a href="tipo.php?tipo=heladero" class="ddl-item">
    <img src="/static/img/heladero12kg.webp" alt="Heladero">
    <span>Heladero</span>
  </a>
</div>

</section>



  

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="/static/js/script.js"></script>

<?php include 'partials/footer.php'; ?>
