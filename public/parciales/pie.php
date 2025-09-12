</main>
<footer class="pie">
  <div class="contenedor pie__contenido">
    <p>© <?= date('Y') ?> <?= htmlspecialchars($nombre) ?> · Hecho con PHP, HTML y CSS</p>
    <div class="pie__links">
      <a href="/docs/cv-aissa.pdf" download>Descargar CV (PDF)</a>
      <a href="<?= htmlspecialchars($links['github']) ?>" target="_blank" rel="noopener">GitHub</a>
      <a href="<?= htmlspecialchars($links['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a>
    </div>
  </div>
</footer>

<a class="float-cta" href="/contacto.php">Contactar</a>
<script src="/js/app.js" defer></script>
</body>
</html>
