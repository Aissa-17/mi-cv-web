<?php
$tituloPagina = 'Proyectos · Aissa Allay';
include __DIR__ . '/parciales/cabecera.php';

$ruta = __DIR__ . '/../datos/proyectos.json';
$proyectos = is_file($ruta) ? json_decode(file_get_contents($ruta), true) : [];
?>
<section class="contenedor seccion">
  <h1>Proyectos</h1>
  <p>Selección de trabajos y prácticas técnicas orientadas a web y despliegue en VPS.</p>

  <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: var(--gap);">
    <?php foreach ($proyectos as $p): ?>
      <article class="card revelar">
        <h2 style="margin-bottom:6px;"><?= htmlspecialchars($p['titulo']) ?></h2>
        <p><?= htmlspecialchars($p['descripcion']) ?></p>
        <?php if (!empty($p['stack'])): ?>
          <div class="chips" style="margin:12px 0 8px;">
            <?php foreach ($p['stack'] as $tag): ?>
              <span class="chip"><?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <div class="hero__botones" style="margin-top:8px;">
          <?php if (!empty($p['enlaces']['repo'])): ?>
            <a class="btn" href="<?= htmlspecialchars($p['enlaces']['repo']) ?>" target="_blank" rel="noopener">Repositorio</a>
          <?php endif; ?>
          <?php if (!empty($p['enlaces']['demo']) && $p['enlaces']['demo'] !== '#'): ?>
            <a class="btn btn--primario" href="<?= htmlspecialchars($p['enlaces']['demo']) ?>" target="_blank" rel="noopener">Demo</a>
          <?php endif; ?>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>
<?php include __DIR__ . '/parciales/pie.php'; ?>
