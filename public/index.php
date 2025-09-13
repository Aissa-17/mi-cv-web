<?php
$tituloPagina = 'Portafolio · Aissa Allay';
include __DIR__ . '/parciales/cabecera.php';
?>
<section class="contenedor hero revelar">
  <div class="hero__titulo">
    <span class="badge">Disponible para primera oportunidad profesional</span>
    <h1>Hola, soy <?= htmlspecialchars($nombre) ?> — <br>
      <span style="color:var(--primario)"><?= htmlspecialchars($rol) ?></span>
    </h1>
    <p>
      Desarrollo sitios y soluciones en <strong>PHP + WordPress</strong>, con despliegue en <strong>Docker/VPS</strong>,
      optimización SEO y buenas prácticas de rendimiento. Código claro y mantenible.
    </p>
    <div class="hero__botones">
      <a class="btn btn--primario" href="/proyectos.php">Ver proyectos</a>
      <a class="btn btn--fantasma" href="/docs/cv-aissa.pdf" download>Descargar CV</a>
      <a class="btn" href="<?= htmlspecialchars($links['github']) ?>" target="_blank" rel="noopener">GitHub</a>
      <a class="btn" href="<?= htmlspecialchars($links['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a>
    </div>
  </div>
  <div class="hero__foto">
    <img src="/img/foto-perfil.jpg" alt="Foto de <?= htmlspecialchars($nombre) ?>">
  </div>
</section>

<section class="contenedor seccion revelar" id="habilidades">
  <h2>Habilidades clave</h2>
  <p>Stack actual y herramientas con las que trabajo a diario.</p>
  <div class="chips" style="margin-top:10px">
    <span class="chip">PHP</span><span class="chip">WordPress</span><span class="chip">WooCommerce</span>
    <span class="chip">MySQL</span><span class="chip">HTML/CSS</span><span class="chip">GIT/GitHub</span><span class="chip">JavaScript</span>
    <span class="chip">Docker</span><span class="chip">Nginx</span><span class="chip">VPS</span><span class="chip">SEO</span>
    <span class="chip">Odoo</span><span class="chip">JAVA</span><span class="chip">Prestashop</span><span class="chip">n8n</span>
  </div>
</section>

<section class="contenedor seccion revelar">
  <h2>Lo que aporto</h2>
  <ul class="lista-simple">
    <li>Código sencillo y legible, con foco en rendimiento y SEO.</li>
    <li>Despliegues limpios en Docker/VPS y buenas prácticas básicas de seguridad.</li>
    <li>Experiencia práctica en WordPress (temas, plugins y personalizaciones).</li>
  </ul>
</section>

<?php
$rutaExp = __DIR__ . '/../datos/experiencia.json';
$experiencia = is_file($rutaExp) ? json_decode(file_get_contents($rutaExp), true) : [];
?>
<section class="contenedor seccion revelar" style="--d:.05s">
  <h2>Experiencia</h2>
  <div class="timeline" style="margin-top:10px">
    <?php foreach ($experiencia as $i => $e): ?>
      <div class="t-item revelar" style="--d: <?= 0.08 * ($i+1) ?>s">
        <span class="t-dot"></span>
        <article class="t-card">
          <h3><?= htmlspecialchars($e['rol']) ?> · <span style="color:var(--primario)"><?= htmlspecialchars($e['empresa']) ?></span></h3>
          <small style="opacity:.8"><?= htmlspecialchars($e['periodo']) ?></small>
          <p><?= htmlspecialchars($e['resumen']) ?></p>
        </article>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="contenedor seccion revelar">
  <h2>¿Hablamos?</h2>
  <p>Puedo incorporarme rápido. Respondo por email y LinkedIn.</p>
  <div class="hero__botones" style="margin-top:10px">
    <a class="btn btn--primario" href="/contacto.php">Contacto</a>
    <a class="btn" href="<?= htmlspecialchars($links['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a>
  </div>
</section>

<?php include __DIR__ . '/parciales/pie.php'; ?>