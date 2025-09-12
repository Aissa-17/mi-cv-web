// Menú móvil
document.addEventListener('click', (e) => {
  const btn = e.target.closest('[data-abrir]');
  const link = e.target.closest('a');
  const menu = document.getElementById('menu');
  if (btn && menu) menu.classList.toggle('abierto');
  if (link && menu && menu.classList.contains('abierto')) menu.classList.remove('abierto');
});

// Scroll suave para anclas internas
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', (e) => {
    const id = a.getAttribute('href');
    const el = document.querySelector(id);
    if (el) { e.preventDefault(); el.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
  });
});

// Reveal on scroll (si no se prefiere reducir movimiento)
if (window.matchMedia('(prefers-reduced-motion: no-preference)').matches) {
  const revelar = document.querySelectorAll('.revelar');
  const io = new IntersectionObserver((entries) => {
    entries.forEach(en => en.isIntersecting && en.target.classList.add('aparece'));
  }, { threshold: 0.15 });
  revelar.forEach(el => io.observe(el));
}
