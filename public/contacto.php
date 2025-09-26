<?php
$tituloPagina = 'Contacto · Aissa Allay';
include __DIR__ . '/parciales/cabecera.php';

// Mensajes de estado muy simples (GET)
$ok   = isset($_GET['ok']);
$error= isset($_GET['error']);
?>
<section class="contenedor seccion">
  <h1>Contacto</h1>
  <p>Escríbeme y te respondo pronto. También puedes hablarme por LinkedIn.</p>

  <?php if ($ok): ?>
    <div class="card" style="border-left:4px solid var(--ok);">¡Mensaje enviado! Gracias por contactarme.</div>
  <?php elseif ($error): ?>
    <div class="card" style="border-left:4px solid #ff6b6b;">No se pudo enviar. Inténtalo de nuevo.</div>
  <?php endif; ?>

  <form class="card" action="/procesar-contacto.php" method="post" style="margin-top:12px;">
    <div class="grid" style="grid-template-columns:1fr 1fr;">
      <label>Nombre
        <input name="nombre" required style="width:100%; padding:10px; margin-top:6px; border-radius:10px; border:1px solid var(--borde); background:#0e1a2c; color:var(--texto);">
      </label>
      <label>Email
        <input type="email" name="email" required style="width:100%; padding:10px; margin-top:6px; border-radius:10px; border:1px solid var(--borde); background:#0e1a2c; color:var(--texto);">
      </label>
    </div>
    <label style="display:block; margin-top:10px;">Mensaje
      <textarea name="mensaje" rows="5" required style="width:100%; padding:10px; margin-top:6px; border-radius:10px; border:1px solid var(--borde); background:#0e1a2c; color:var(--texto);"></textarea>
    </label>
    <!-- Honeypot -->
    <input type="text" name="web" style="display:none;">
    <div class="hero__botones" style="margin-top:12px;">
      <button class="btn btn--primario" type="submit">Enviar</button>
      <a class="btn" href="<?= htmlspecialchars($links['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a>
    </div>
  </form>
</section>
<?php include __DIR__ . '/parciales/pie.php'; ?>
