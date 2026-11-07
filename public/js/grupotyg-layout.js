document.addEventListener('DOMContentLoaded', () => {
  const header = document.getElementById('tygHeader');
  const button = document.getElementById('tygMenuBtn');
  const menu = document.getElementById('tygMobileMenu');
  const icon = document.getElementById('tygMenuIcon');
  if (!header || !button || !menu) return;
  const updateHeader = () => header.classList.toggle('is-scrolled', window.scrollY > 18);
  const setMenu = (open) => {
    menu.hidden = !open;
    button.setAttribute('aria-expanded', String(open));
    button.setAttribute('aria-label', open ? 'Cerrar menú' : 'Abrir menú');
    if (icon) icon.textContent = open ? 'close' : 'menu';
  };
  updateHeader();
  window.addEventListener('scroll', updateHeader, { passive: true });
  button.addEventListener('click', () => setMenu(menu.hidden));
  document.addEventListener('keydown', e => { if (e.key === 'Escape' && !menu.hidden) {setMenu(false);button.focus();} });
  document.addEventListener('click', e => { if (!header.contains(e.target) && !menu.hidden) setMenu(false); });
  window.addEventListener('resize', () => { if (window.innerWidth >= 1024 && !menu.hidden) setMenu(false); });
});
