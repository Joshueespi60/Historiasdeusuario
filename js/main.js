document.addEventListener('DOMContentLoaded', () => {
  const sections = document.querySelectorAll('.tab-section');
  const navLinks = document.querySelectorAll('nav a[href^="#"]');

  function activateSection(id, doScroll = true) {
    // Mostrar/ocultar secciones
    sections.forEach(sec => {
      sec.classList.toggle('active', sec.id === id);
    });

    // Marcar enlace activo
    navLinks.forEach(a => {
      a.classList.toggle('active', a.getAttribute('href') === `#${id}`);
    });

    // Scroll suave
    const target = document.getElementById(id);
    if (target) {
      history.replaceState(null, '', `#${id}`);
      if (doScroll) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }
  }

  // Activar según hash inicial o por defecto "user-stories"
  const initial = location.hash ? location.hash.substring(1) : 'user-stories';
  activateSection(initial, false);

  // Click en enlaces del nav
  navLinks.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const id = link.getAttribute('href').substring(1);
      activateSection(id, true);
    });
  });
});
