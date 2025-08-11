<?php include 'partials/header.php'; ?>
<link rel="stylesheet" href="/static/style-optimizado.css">
<nav>
    <div class="nav-container">
      <button class="hamburger" aria-label="Menú" onclick="toggleMenu()">
        &#9776;
      </button>
      <div class="nav-links" id="navLinks">
        <a href="index.php" >Inicio</a>
        <a href="historia.php">Productos</a>
        <a href="novedades.php">Novedades</a>
        <a href="nosotros.php"class="active">Nosotros</a>
      </div>
    </div>
  </nav>
<main>
  <section class="section-contacto">
    <div class="formulario-contacto">
      <h2>Contactanos</h2>
      <p>¿Querés hacer un pedido, visitarnos o simplemente decirnos hola? Escribinos y te respondemos a la brevedad.</p>

      <?php if (isset($_GET['estado'])): ?>
        <div id="alert-flash" class="alert">
          <?php
             switch ($_GET['estado']) {
              case 'ok': echo "✅ Mensaje enviado correctamente. ¡Gracias por contactarnos!"; break;
              case 'error_envio': echo "❌ Error al enviar el mensaje. Intentalo más tarde."; break;
              case 'error_campos': echo "⚠️ Por favor completá todos los campos correctamente."; break;
      }
    ?>
  </div>
<?php endif; ?>


      <form action="enviar.php" method="POST">
        <div class="campo">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="campo">
          <label for="email">Correo Electrónico</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="campo">
          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
        </div>

        <button type="submit">Enviar Mensaje</button>
      </form>
    </div>

   
  </section>
</main>

<script src="/static/js/script.js"></script>

<?php include 'partials/footer.php'; ?>
