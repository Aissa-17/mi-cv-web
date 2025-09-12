<?php
$tituloPagina = 'Sobre mí · Aissa Allay';
include __DIR__ . '/parciales/cabecera.php';
?>
<section class="contenedor seccion">
  <h1>Sobre mí</h1>
  <div class="grid" style="grid-template-columns: 1.2fr .8fr;">
    <div class="card">
      <p>Soy <strong><?= htmlspecialchars($nombre) ?></strong>, <?= htmlspecialchars($rol) ?>.
      Me enfoco en PHP + WordPress, despliegue en <strong>Docker/VPS</strong>,
      y optimización de rendimiento/SEO. Me motiva escribir código claro y humano.</p>

      <h2 style="margin-top:14px;">Lo que busco</h2>
      <ul class="lista-simple">
        <li>Primera oportunidad oficial como desarrollador web.</li>
        <li>Aprender con un equipo y aportar desde el primer día.</li>
        <li>Trabajar en proyectos reales con impacto.</li>
      </ul>

      <h2 style="margin-top:14px;">Stack actual</h2>
      <div class="chips" style="margin-top:8px;">
        <span class="chip">PHP</span><span class="chip">WordPress</span><span class="chip">WooCommerce</span>
        <span class="chip">MySQL</span><span class="chip">HTML/CSS</span><span class="chip">JavaScript</span>
        <span class="chip">Docker</span><span class="chip">Nginx</span><span class="chip">VPS</span><span class="chip">SEO</span>
      </div>
    </div>

    <aside class="card">
      <h2>Experiencia breve</h2>
      <ul class="lista-simple">
        <li><strong>Desarrollador Full Stack</strong> — KORPUX (2025) · PHP/WordPress, APIs, Docker/VPS.</li>
        <li><strong>Diseñador Web</strong> — Agencia Krece (2025) · WordPress + SEO.</li>
        <li><strong>Técnico Informático</strong> — App Alpedrete (2023) · Soporte y mantenimiento.</li>
      </ul>

      <h2 style="margin-top:12px;">Enlaces</h2>
      <div class="hero__botones" style="margin-top:8px;">
        <a class="btn" href="<?= htmlspecialchars($links['github']) ?>" target="_blank" rel="noopener">GitHub</a>
        <a class="btn btn--primario" href="<?= htmlspecialchars($links['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a>
        <a class="btn" href="/docs/cv-aissa.pdf" download>Descargar CV</a>
      </div>
    </aside>
  </div>
</section>
<?php include __DIR__ . '/parciales/pie.php'; ?>
