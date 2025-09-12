<?php
$tituloPagina = 'Página no encontrada';
include __DIR__ . '/parciales/cabecera.php';
?>
<section class="contenedor seccion">
  <div class="card">
    <h1>404</h1>
    <p>No encuentro lo que buscas. Vuelve al inicio.</p>
    <div class="hero__botones" style="margin-top:8px;">
      <a class="btn btn--primario" href="/index.php">Ir al inicio</a>
      <a class="btn" href="/proyectos.php">Ver proyectos</a>
    </div>
  </div>
</section>
<?php include __DIR__ . '/parciales/pie.php'; ?>
