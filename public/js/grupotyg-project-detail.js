(() => {
  'use strict';
  const root = document.querySelector('.tyg-case');
  if (!root) return;
  const revealItems = root.querySelectorAll('[data-reveal]');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); } });
    }, { threshold: 0.08, rootMargin: '0px 0px 30px 0px' });
    revealItems.forEach(item => observer.observe(item));
  } else revealItems.forEach(item => item.classList.add('is-visible'));

  const items = Array.from(document.querySelectorAll('#projectGallery [data-gallery-src]'));
  const modal = document.getElementById('tygProjectLightbox');
  if (!items.length || !modal) return;
  const img = document.getElementById('tygLightboxImage');
  const counter = document.getElementById('tygLightboxCounter');
  const caption = document.getElementById('tygLightboxCaption');
  const stage = document.getElementById('tygLightboxStage');
  const zoomButton = document.getElementById('tygLightboxZoom');
  const closeButton = document.getElementById('tygLightboxClose');
  let current = 0, previousFocus = null, touchStartX = null;
  const isOpen = () => modal.classList.contains('is-open');
  function resetZoom() { stage.classList.remove('is-zoomed'); zoomButton.querySelector('span').textContent = 'zoom_in'; stage.scrollTop = stage.scrollLeft = 0; }
  function show(index) {
    current = (index + items.length) % items.length;
    const item = items[current];
    resetZoom();
    img.src = item.dataset.gallerySrc;
    img.alt = item.dataset.galleryAlt || `Imagen ${current + 1}`;
    counter.textContent = `${String(current + 1).padStart(2,'0')} / ${String(items.length).padStart(2,'0')}`;
    caption.textContent = img.alt;
  }
  function open(index) { previousFocus = document.activeElement; show(index); modal.classList.add('is-open'); modal.setAttribute('aria-hidden','false'); document.body.style.overflow='hidden'; closeButton.focus(); }
  function close() { if (!isOpen()) return; modal.classList.remove('is-open'); modal.setAttribute('aria-hidden','true'); document.body.style.overflow=''; img.removeAttribute('src'); resetZoom(); if (previousFocus && previousFocus.isConnected) previousFocus.focus(); }
  items.forEach((item, index) => item.addEventListener('click', () => open(index)));
  document.getElementById('tygLightboxPrev').addEventListener('click', () => show(current - 1));
  document.getElementById('tygLightboxNext').addEventListener('click', () => show(current + 1));
  closeButton.addEventListener('click', close);
  zoomButton.addEventListener('click', () => { stage.classList.toggle('is-zoomed'); zoomButton.querySelector('span').textContent = stage.classList.contains('is-zoomed') ? 'zoom_out' : 'zoom_in'; });
  stage.addEventListener('click', event => { if (event.target === img) zoomButton.click(); });
  modal.addEventListener('click', event => { if (event.target === modal) close(); });
  document.addEventListener('keydown', event => {
    if (!isOpen()) return;
    if (event.key === 'Escape') { event.preventDefault(); close(); }
    if (event.key === 'ArrowLeft') { event.preventDefault(); show(current - 1); }
    if (event.key === 'ArrowRight') { event.preventDefault(); show(current + 1); }
    if (event.key.toLowerCase() === 'z') { event.preventDefault(); zoomButton.click(); }
    if (event.key === 'Tab') {
      const focusables = Array.from(modal.querySelectorAll('button')).filter(button => !button.disabled);
      const first = focusables[0], last = focusables[focusables.length - 1];
      if (event.shiftKey && document.activeElement === first) { event.preventDefault(); last.focus(); }
      else if (!event.shiftKey && document.activeElement === last) { event.preventDefault(); first.focus(); }
    }
  });
  stage.addEventListener('touchstart', event => { touchStartX = event.touches[0]?.clientX ?? null; }, { passive:true });
  stage.addEventListener('touchend', event => {
    if (touchStartX === null || stage.classList.contains('is-zoomed')) return;
    const delta = (event.changedTouches[0]?.clientX ?? touchStartX) - touchStartX;
    if (Math.abs(delta) > 65) show(current + (delta < 0 ? 1 : -1));
    touchStartX = null;
  }, { passive:true });
})();
